<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
  use HasFactory;

  const SHIFT_MORNING = 'A';
  const SHIFT_AFTERNOON = 'B';
  const SHIFT_NIGHT = 'C';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'nome', 'descricao',
    'quantidade_semestres', 'valor',
    'turno', 'horas_turno'
  ];

  public function courseDisciplines() {
    return $this->hasMany('App\Models\DisciplinaCurso', 'curso_id');
  }

  public function hasDiscipline(int $disciplineId) {
    foreach ($this->courseDisciplines as $cd) {
      if ($cd->disciplina_id === $disciplineId) {
        return true;
      }
    }

    return false;
  }
}
