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
   * Get the password for the user.
   *
   * @return string
   */
  public function getAuthPassword()
  {
    return $this->senha;
  }
}
