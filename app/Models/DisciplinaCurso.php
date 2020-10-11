<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplinaCurso extends Model
{
  use HasFactory;

  /**
   * Tabela associada ao Model
   *
   * @var string
   */
  protected $table = 'disciplinas_curso';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'curso_id', 'disciplina_id', 'obrigatoria'
  ];

  public function course() {
    return $this->belongsTo('App\Models\Curso', 'curso_id');
  }

  public function discipline() {
    return $this->belongsTo('App\Models\Disciplina', 'disciplina_id');
  }
}
