<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequenciaMembroBanca extends Model
{
  use HasFactory;

  /**
   * Tabela associada ao Model
   *
   * @var string
   */
  protected $table = 'frequencias_membro_banca';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'presente',
    'membro_banca_id',
    'frequencia_id'
  ];

  public function frequency() {
    return $this->belongsTo('App\Models\Frequencia', 'frequencia_id');
  }
}
