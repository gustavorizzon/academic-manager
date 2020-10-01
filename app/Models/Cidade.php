<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'nome', 'estado_id'
  ];

  public function state() {
    return $this->belongsTo('App\Models\Estado', 'estado_id');
  }
}
