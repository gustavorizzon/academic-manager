<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoBanca extends Model
{
    use HasFactory;

    /**
     * Tabela associada ao Model
     *
     * @var string
     */
    protected $table = 'alunos_banca';
}
