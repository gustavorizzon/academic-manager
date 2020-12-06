<?php

namespace App\Models;

use Carbon\Carbon;
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

  public function documents() {
    return $this->hasMany('App\Models\Documento', 'banca_id');
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

  public function getStudents() {
    return $this->members()
        ->join('membros_instituicao as mi', 'membros_banca.membro_instituicao_id', '=', 'mi.id')
      ->where('mi.tipo_membro', MembroInstituicao::STUDENT)
    ->get('mi.*');
  }

  public function hasStudent(MembroInstituicao $student) {
    foreach ($this->getStudents() as $s) {
      if ($s->id === $student->id) {
        return true;
      }
    }

    return false;
  }

  public function getProfessors() {
    return $this->members()
        ->join('membros_instituicao as mi', 'membros_banca.membro_instituicao_id', '=', 'mi.id')
      ->where('mi.tipo_membro', MembroInstituicao::PROFESSOR)
    ->get('mi.*');
  }

  public function hasProfessor(MembroInstituicao $professor) {
    foreach ($this->getProfessors() as $p) {
      if ($p->id === $professor->id) {
        return true;
      }
    }

    return false;
  }
}
