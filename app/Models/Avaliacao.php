<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
  use HasFactory;

  const TYPE_TEST = 'P';
  const TYPE_WORK = 'T';
  const TYPE_EXAM = 'E';

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'avaliacoes';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'conteudo', 'peso', 'data', 'tipo', 'banca_id'
  ];

  public function board() {
    return $this->belongsTo('App\Models\Banca', 'banca_id');
  }

  public function boardMembersTask() {
    return $this->hasMany('App\Models\AvaliacaoMembroBanca', 'avaliacao_id');
  }
}
