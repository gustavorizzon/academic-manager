<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'nome', 'data', 'nome_arquivo',
    'nome_arquivo_salvo', 'tamanho_arquivo',
    'banca_id', 'membro_instituicao_id'
  ];

  public function board() {
    return $this->belongsTo('App\Models\Banca', 'banca_id');
  }
}
