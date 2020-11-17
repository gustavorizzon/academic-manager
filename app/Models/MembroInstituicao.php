<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class MembroInstituicao extends Authenticatable
{
  use HasFactory, Notifiable;

  const ADMIN = '*';
  const COORDINATOR = 'C';
  const PROFESSOR = 'D';
  const STUDENT = 'A';

  /**
   * Tabela associada ao Model
   *
   * @var string
   */
  protected $table = 'membros_instituicao';

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'senha', 'remember_token',
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'nome', 'data_nascimento', 'orientacao_sexual', 'estado_civil',
    'cpf', 'rg', 'nome_mae', 'nome_pai',
    'telefone', 'email',
    'rua', 'numero_rua', 'complemento',
    'referencia', 'bairro', 'cidade_id',
    'login', 'senha',
    'tipo_membro',
  ];

  /**
   * Get the password for the user.
   *
   * @return string
   */
  public function getAuthPassword()
  {
    return $this->senha;
  }

  public function graduation() {
    return $this->hasOne('App\Models\Graduacao', 'membro_instituicao_id');
  }

  public function enrollments() {
    return $this->hasMany('App\Models\Matricula', 'membro_instituicao_id');
  }

  public function getEnrolledCourse() {
    return $this->enrollments()
      ->where('status', Matricula::ENROLLED)
    ->first();
  }

  public function getLastGrade() {
    return AvaliacaoMembroBanca::join('avaliacoes as a', 'avaliacoes_membro_banca.avaliacao_id', '=', 'a.id')
        ->join('membros_banca as mb', 'avaliacoes_membro_banca.membro_banca_id', '=', 'mb.id')
      ->where('mb.membro_instituicao_id', $this->id)
      ->whereDate('a.data', '<=', Carbon::now()->toDateString())
      ->where('avaliacoes_membro_banca.nota', '<>', 0)
    ->first();
  }
}
