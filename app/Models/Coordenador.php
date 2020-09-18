<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordenador extends Model
{
  use HasFactory;

  /**
   * Tabela associada ao Model
   *
   * @var string
   */
  protected $table = 'coordenadores';

  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'matricula';
}
