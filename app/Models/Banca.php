<?php

namespace App\Models;

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
}
