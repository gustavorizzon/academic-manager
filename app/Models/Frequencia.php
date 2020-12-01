<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frequencia extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'resumo_aula', 'banca_id', 'data'
  ];

  public function board() {
    return $this->belongsTo('App\Models\Banca', 'banca_id');
  }

  public function boardMembersFrequency() {
    return $this->hasMany('App\Models\FrequenciaMembroBanca', 'frequencia_id');
  }

  public function presencesCount() {
    return $this->boardMembersFrequency()
      ->where('presente', true)
    ->count();
  }

  public function foulsCount() {
    return $this->boardMembersFrequency()
      ->where('presente', false)
    ->count();
  }
}
