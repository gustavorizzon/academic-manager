<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduacao extends Model
{
  use HasFactory;

  /**
   * Tabela associada ao Model
   *
   * @var string
   */
  protected $table = 'graduacoes';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'titulo', 'numero_titulo', 'membro_instituicao_id'
  ];

  public function institution_member() {
    return $this->belongsTo('App\Models\MembroInstituicao', 'membro_instituicao_id');
  }
}
