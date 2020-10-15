<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
  use HasFactory;

  const STATUS_ENROLLED = 'M';
  const STATUS_LOCKED = 'T';
  const STATUS_CONCLUDED = 'C';
}
