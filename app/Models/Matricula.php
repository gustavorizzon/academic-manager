<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
  use HasFactory;

  const ENROLLED = 'M';
  const LOCKED = 'T';
  const CONCLUDED = 'C';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'status', 'membro_instituicao_id', 'curso_id'
  ];

  public function institutionMember() {
    return $this->belongsTo('App\Models\MembroInstituicao', 'membro_instituicao_id');
  }

  public function course() {
    return $this->belongsTo('App\Models\Curso', 'curso_id');
  }
}
