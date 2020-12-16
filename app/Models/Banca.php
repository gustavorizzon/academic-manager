<?php

namespace App\Models;

use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banca extends Model
{
  use HasFactory;

  const STATUS_PENDING = false;
  const STATUS_FINISHED = true;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'descricao', 'periodo_letivo',
    'status', 'sala',
    'disciplina_curso_id'
  ];

  public function courseDiscipline() {
    return $this->belongsTo('App\Models\DisciplinaCurso', 'disciplina_curso_id');
  }

  public function members() {
    return $this->hasMany('App\Models\MembroBanca', 'banca_id');
  }

  public function frequencies() {
    return $this->hasMany('App\Models\Frequencia', 'banca_id')->orderBy('data');
  }

  public function tasks() {
    return $this->hasMany('App\Models\Avaliacao', 'banca_id')->orderBy('data');
  }

  public function tests() {
    return $this->tasks()
      ->where('tipo', Avaliacao::TYPE_TEST)
    ->get();
  }

  public function works() {
    return $this->tasks()
      ->where('tipo', Avaliacao::TYPE_WORK)
    ->get();
  }

  public function exams() {
    return $this->tasks()
      ->where('tipo', Avaliacao::TYPE_EXAM);
  }

  public function documents() {
    return $this->hasMany('App\Models\Documento', 'banca_id');
  }

  public function getNextTasks() {
    return $this->tasks()
      ->whereDate('data', '>=', Carbon::now()->toDateString())
    ->get();
  }

  public function getNextTask() {
    return $this->getNextTasks()->first();
  }

  public function hasNextTask() {
    return !is_null($this->getNextTask());
  }

  public function getNextClasses() {
    return $this->frequencies()
      ->whereDate('data', '>=', Carbon::now()->toDateString())
    ->get();
  }

  public function getNextClass() {
    return $this->getNextClasses()->first();
  }

  public function hasNextClass() {
    return !is_null($this->getNextClass());
  }

  public function getClassByDate(string $date) {
    return $this->frequencies()->where('data', $date)->first();
  }

  public function getClassById(int $id) {
    return $this->frequencies()->where('id', $id)->first();
  }

  public function getTaskByDate(string $date) {
    return $this->tasks()->where('data', $date)->first();
  }

  public function getTaskById(int $id) {
    return $this->tasks()->where('id', $id)->first();
  }

  public function getDocumentById(int $id) {
    return $this->documents()->where('id', $id)->first();
  }

  public function students() {
    return $this->members()
      ->select('membros_banca.*')
        ->join('membros_instituicao as mi', 'membros_banca.membro_instituicao_id', '=', 'mi.id')
      ->where('mi.tipo_membro', MembroInstituicao::STUDENT);
  }

  /**
   * Filtering only students that are not already disapproved by fouls
   * nor students that are with waiver status
   */
  public function currentStudents() {
    return $this->students()
      ->whereNotIn('membros_banca.status', [
        MembroBanca::STATUS_WAIVER,
        MembroBanca::STATUS_DISAPPROVED
      ]);
  }

  public function studentsInExam() {
    return $this->students()
      ->where('membros_banca.status', MembroBanca::STATUS_EXAM);
  }

  public function hasStudent(MembroInstituicao $student) {
    foreach ($this->students as $s) {
      if ($s->institutionMember->id === $student->id) {
        return true;
      }
    }

    return false;
  }

  public function studentsBelowAverage() {
    $minAverage = $this->courseDiscipline->discipline->media;
    $students = collect();

    foreach ($this->currentStudents as $s) {
      if ($s->getWeightedAverage() < $minAverage) {
        $students->add($s);
      }
    }

    return $students;
  }

  public function studentsOnAverageAndAbove() {
    $minAverage = $this->courseDiscipline->discipline->media;
    $students = collect();

    foreach ($this->currentStudents as $s) {
      if ($s->getWeightedAverage() >= $minAverage) {
        $students->add($s);
      }
    }

    return $students;
  }

  public function professors() {
    return $this->members()
      ->select('membros_banca.*')
        ->join('membros_instituicao as mi', 'membros_banca.membro_instituicao_id', '=', 'mi.id')
      ->where('mi.tipo_membro', MembroInstituicao::PROFESSOR);
  }

  public function hasProfessor(MembroInstituicao $professor) {
    foreach ($this->professors as $p) {
      if ($p->institutionMember->id === $professor->id) {
        return true;
      }
    }

    return false;
  }

  public function recalculateMembersCredits() {
    $creditsPerClass = $this->courseDiscipline->course->horas_turno;
    $discipline = $this->courseDiscipline->discipline;
    $foulsThreshold = $discipline->total_creditos - $discipline->minimo_creditos_necessarios;
    $today = new DateTime;

    foreach ($this->currentStudents as $student) {
      $studentCredits = 0;
      $fouls = 0;

      foreach ($student->frequencies as $frequency) {
        // Calculate Credits
        if ($frequency->presente) {
          $studentCredits += $creditsPerClass;
        }

        // Calculate Fouls
        $frequencyDate = DateTime::createFromFormat('Y-m-d', $frequency->frequency->data);
        $diffInDays = $today->diff($frequencyDate)->format('%R%a');
        if ($diffInDays <= 0) {
          if (!$frequency->presente) {
            $fouls += $creditsPerClass;
          }
        }
      }

      // Update student credits
      $student->update([ 'creditos' => $studentCredits ]);

      // Disapprove student if fouls count exceeds the threshold
      if ($fouls > $foulsThreshold) {
        $student->update([ 'status' => MembroBanca::STATUS_DISAPPROVED ]);
      }
    }
  }

  public function getBoardMemberByInstitutionMemberId(int $institutionMemberId) {
    foreach ($this->members as $member) {
      if ($member->membro_instituicao_id === $institutionMemberId) {
        return $member;
      }
    }

    return false;
  }
}
