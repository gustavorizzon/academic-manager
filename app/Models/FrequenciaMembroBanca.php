<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequenciaMembroBanca extends Model
{
    use HasFactory;

    /**
     * Tabela associada ao Model
     *
     * @var string
     */
    protected $table = 'frequencias_membro_banca';
}
