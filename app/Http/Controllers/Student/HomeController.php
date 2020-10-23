<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Avaliacao;
use App\Models\Banca;
use App\Models\MembroBanca;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function home()
  {
    return view('student.home', [
      'remainingBoardsCount' => $this->getRemainingBoardsCount(),
      'documentsCount' => $this->getDocumentsCount(),
      'pendingTasksCount' => $this->getPendingTasksCount(),
      'foulsCount' => $this->getFoulsCount(),
      'boards' => $this->getBoardsList(),
      'tasks' => $this->getTasksList(),
    ]);
  }

  /**
   * Returns the authenticated student remaining boards count
   *
   * @return int
   */
  private function getRemainingBoardsCount() {
    return MembroBanca::where('membro_instituicao_id', Auth::id())
                      ->where('status', MembroBanca::STATUS_ENROLLED)
                      ->count();
  }

  /**
   * Returns the authenticated student available documents count
   *
   * @return int
   */
  private function getDocumentsCount() {
    return DB::table('documentos')
             ->join('bancas', 'documentos.banca_id', '=', 'bancas.id')
             ->join('membros_banca', 'bancas.id', '=', 'membros_banca.banca_id')
             ->where('membros_banca.membro_instituicao_id', '=', Auth::id())
             ->count();
  }

  /**
   * Returns the authenticated student pending tests and jobs count
   *
   * @return int
   */
  private function getPendingTasksCount() {
    $studentId = Auth::id();

    return  DB::table('avaliacoes', 'a')
              ->join('bancas as b', 'a.banca_id', '=', 'b.id')
              ->join('membros_banca as mb', 'b.id', '=', 'mb.banca_id')
              ->where('mb.membro_instituicao_id', '=', $studentId)
              ->whereNotIn('a.id', function ($query) use ($studentId) {
                return  $query->select('amb.avaliacao_id')
                              ->from('avaliacoes_membro_banca', 'amb')
                                ->join('membros_banca as mb2', 'amb.membro_banca_id', '=', 'mb2.id')
                              ->where('mb2.membro_instituicao_id', '=', $studentId);
              })
            ->count();
  }

  /**
   * Returns the authenticated user fouls count
   *
   * @return int
   */
  private function getFoulsCount() {
    return  DB::table('frequencias', 'f')
              ->join('frequencias_membro_banca as fmb', 'f.id', '=', 'fmb.frequencia_id')
              ->join('membros_banca as mb', 'fmb.membro_banca_id', '=', 'mb.id')
            ->where('f.data', '<', Carbon::now()->toDateString())
            ->where('fmb.presente', '=', false)
            ->where('mb.membro_instituicao_id', '=', Auth::id())
          ->count();
  }

  /**
   * Returns the list of the boards for the authenticated user
   *
   * @return mixed
   */
  private function getBoardsList() {
    return Banca::join('membros_banca as mb', 'bancas.id', '=', 'mb.banca_id')
      ->where('mb.membro_instituicao_id', '=', Auth::id())
      ->orderBy('bancas.periodo_letivo')
      ->orderByDesc('bancas.status')
    ->get();
  }

  private function getTasksList() {
    $studentId = Auth::id();

    return Avaliacao::join('bancas as b', 'avaliacoes.banca_id', '=', 'b.id')
        ->join('membros_banca as mb', 'b.id', '=', 'mb.banca_id')
      ->where('mb.membro_instituicao_id', '=', $studentId)
      ->whereNotIn('avaliacoes.id', function ($query) use ($studentId) {
        return  $query->select('amb.avaliacao_id')
                    ->from('avaliacoes_membro_banca', 'amb')
                      ->join('membros_banca as mb2', 'amb.membro_banca_id', '=', 'mb2.id')
                    ->where('mb2.membro_instituicao_id', '=', $studentId);
      })
      ->get();
  }
}
