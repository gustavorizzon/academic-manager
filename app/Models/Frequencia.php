<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frequencia extends Model
{
  use HasFactory;

  public function board() {
    return $this->belongsTo('App\Models\Banca', 'banca_id');
  }
}
