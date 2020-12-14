<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Matricula extends Model
{
  use HasFactory;

  const ENROLLED = 'M';
  const LOCKED = 'T';
  const CONCLUDED = 'C';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'status', 'membro_instituicao_id', 'curso_id'
  ];

  public function institutionMember() {
    return $this->belongsTo('App\Models\MembroInstituicao', 'membro_instituicao_id');
  }

  public function course() {
    return $this->belongsTo('App\Models\Curso', 'curso_id');
  }

  public static function withoutABoard(bool $get = true) {
    $eloquentBuilder = self::where('status', self::ENROLLED)
      ->whereNotIn('id', function ($query) {
        return $query->select('m.id')
          ->from('matriculas as m')
            ->join('membros_banca as mb', 'mb.membro_instituicao_id', '=', 'm.membro_instituicao_id')
            ->join('bancas as b', 'b.id', '=', 'mb.banca_id')
            ->join('disciplinas_curso as dc', 'dc.id', '=', 'b.disciplina_curso_id')
          ->where('m.status', self::ENROLLED)
          ->whereColumn('m.curso_id', 'dc.curso_id');
      });

    return $get ? $eloquentBuilder->get() : $eloquentBuilder;
  }

  public static function withoutABoardGroupedByCourse() {
    return self::withoutABoard(false)
      ->groupBy('curso_id')
      ->selectRaw('curso_id, count(*) as total')
    ->get();
  }

  public static function withoutABoardWhereCourseId(int $id) {
    return self::withoutABoard(false)
      ->where('curso_id', $id)
    ->get();
  }

  public function canBeEditedOrRemoved() {
    $hasBoards = self::join('membros_banca as mb', 'mb.membro_instituicao_id', '=', 'matriculas.membro_instituicao_id')
        ->join('bancas as b', 'b.id', '=', 'mb.banca_id')
        ->join('disciplinas_curso as dc', 'dc.id', '=', 'b.disciplina_curso_id')
      ->whereColumn('matriculas.curso_id', 'dc.curso_id')
      ->where('matriculas.id', $this->id)
    ->count();

    return !$hasBoards;
  }
}
