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

  /**
  * Tabela associada ao Model
  *
  * @var string
  */
  protected $table = 'membros_banca';
}
