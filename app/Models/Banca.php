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

  public function courseDiscipline() {
    return $this->belongsTo('App\Models\DisciplinaCurso', 'disciplina_curso_id');
  }

  public function members() {
    return $this->hasMany('App\Models\MembroBanca', 'banca_id');
  }

  public function frequencies() {
    return $this->hasMany('App\Models\Frequencia', 'banca_id');
  }

  public function tasks() {
    return $this->hasMany('App\Models\Avaliacao', 'banca_id');
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
    if (empty($this->nextClasses)) {
      $this->nextClasses =  $this->frequencies()
        ->whereDate('data', '>=', Carbon::now()->toDateString())
        ->orderBy('data')
      ->get();
    }

    return $this->nextClasses;
  }

  public function getNextClass() {
    if (empty($this->nextClass)) {
      $this->nextClass = $this->getNextClasses()->first();
    }

    return $this->nextClass;
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

  public function getProfessors() {
    if (empty($this->professors)) {
      $this->professors = $this->members()
          ->join('membros_instituicao as mi', 'membros_banca.membro_instituicao_id', '=', 'mi.id')
        ->where('mi.tipo_membro', MembroInstituicao::PROFESSOR)
      ->get('mi.*');
    }

    return $this->professors;
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
