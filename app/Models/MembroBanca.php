<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembroBanca extends Model
{
  use HasFactory;

  const STATUS_ENROLLED = 'M';
  const STATUS_APPROVED = 'A';
  const STATUS_DISAPPROVED = 'R';
  const STATUS_EXAM = 'E';
  const STATUS_WAIVER = 'D';

  /**
  * Tabela associada ao Model
  *
  * @var string
  */
  protected $table = 'membros_banca';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'membro_instituicao_id', 'banca_id',
    'creditos', 'status'
  ];

  public function board() {
    return $this->belongsTo('App\Models\Banca', 'banca_id');
  }

  public function institutionMember() {
    return $this->belongsTo('App\Models\MembroInstituicao', 'membro_instituicao_id');
  }

  public function boardMemberTasks() {
    return $this->hasMany('App\Models\AvaliacaoMembroBanca', 'membro_banca_id');
  }

  public function frequencies() {
    return $this->hasMany('App\Models\FrequenciaMembroBanca', 'membro_banca_id');
  }

  public function lowestGrade() {
    $lowestGrade = null;

    foreach ($this->boardMemberTasks as $grade) {
      if (is_null($lowestGrade)) {
        $lowestGrade = $grade;
      } else {
        if ($lowestGrade->nota > $grade->nota) {
          $lowestGrade = $grade;
        }
      }
    }

    return $lowestGrade;
  }

  public function exam() {
    return $this->boardMemberTasks()
      ->join('avaliacoes as a', 'a.id', '=', 'avaliacoes_membro_banca.avaliacao_id')
    ->where('a.tipo', Avaliacao::TYPE_EXAM);
  }

  public function hasExam() {
    return $this->exam->isNotEmpty();
  }

  public function getWeightedAverage() {
    $weightsSum = 0;
    $sumOfGradesWithWeight = 0;
    $lowestGrade = $this->lowestGrade();
    $hasExam = $this->hasExam();

    foreach ($this->boardMemberTasks as $grade) {
      // We ignore the lowest grade in average if the student has an exam
      if ($hasExam && $lowestGrade->id === $grade->id) continue;

      // and we use the lowest grade weight in the exam
      $gradeTask = $grade->task()->first();
      if ($hasExam && $gradeTask->tipo === Avaliacao::TYPE_EXAM) {
        $weight = $lowestGrade->task()->first()->peso;
      } else {
        $weight = $gradeTask->peso;
      }

      // Sum everything
      $weightsSum += $weight;
      $sumOfGradesWithWeight += ($weight * $grade->nota);
    }

    return $sumOfGradesWithWeight / $weightsSum;
  }
}
