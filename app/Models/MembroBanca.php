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

  public function boardMemberTasks() {
    return $this->hasMany('App\Models\AvaliacaoMembroBanca', 'membro_banca_id');
  }

  public function exam() {
    return $this->boardMemberTasks()
      ->join('avaliacoes as a', 'a.id', '=', 'avaliacoes_membro_banca.avaliacao_id')
    ->where('a.tipo', Avaliacao::TYPE_EXAM);
  }

  public function hasExam() {
    return !is_null($this->exam->first());
  }

  public function getWeightedAverage() {
    $weightsSum = 0;
    $sumOfGradesWithWeight = 0;

    foreach ($this->boardMemberTasks()->get() as $grade) {
      $weight = $grade->task()->first()->peso;

      $weightsSum += $weight;
      $sumOfGradesWithWeight += ($weight * $grade->nota);
    }

    return $sumOfGradesWithWeight / $weightsSum;
  }
}
