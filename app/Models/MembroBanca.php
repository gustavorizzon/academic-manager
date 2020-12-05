<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembroBanca extends Model
{
  use HasFactory;

  const STATUS_ENROLLED = 'M';
  const STATUS_APPROVED = 'A';
  const STATUS_DISAPPROVED = 'R';
  const STATUS_EXAM = 'E';
  const STATUS_WAIVER = 'D';

  /**
  * Tabela associada ao Model
  *
  * @var string
  */
  protected $table = 'membros_banca';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'membro_instituicao_id', 'banca_id',
    'creditos', 'status'
  ];

  public function institutionMember() {
    return $this->belongsTo('App\Models\MembroInstituicao', 'membro_instituicao_id');
  }
}
