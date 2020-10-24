<?php

namespace App\Models;

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
}
