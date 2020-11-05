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

  public function getNextClass() {
    if (empty($this->nextClass)) {
      $this->nextClass = $this->frequencies()
        ->whereDate('data', '>=', Carbon::now()->toDateString())
        ->orderBy('data')
      ->first();
    }

    return $this->nextClass;
  }

  public function hasNextClass() {
    return !is_null($this->getNextClass());
  }
}
