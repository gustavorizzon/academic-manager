<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
  use HasFactory;

  const TYPE_TEST = 'P';
  const TYPE_WORK = 'T';

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'avaliacoes';

  public function board() {
    return $this->belongsTo('App\Models\Banca', 'banca_id');
  }
}
