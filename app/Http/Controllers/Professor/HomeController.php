<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Avaliacao;
use App\Models\Banca;
use App\Models\Documento;
use App\Models\Frequencia;
use App\Models\MembroInstituicao;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  /**
   * Returns the home (dashboard) view
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function home() {
    return view('professor.home', [
      'activeBoardsCount' => $this->getActiveBoardsCount(),
      'nextClass' => $this->getNextClass(),
      'documentsCount' => $this->getDocumentsCount(),
      'nextTask' => $this->getNextTask(),
      'boards' => $this->getBoardsList(),
      'tasks' => $this->getNextTasksList(),
      'nextClasses' => $this->getNextClassesList(),
      'students' => $this->getProfessorStudents(),
      'recentDocuments' => $this->getRecentDocuments(),
    ]);
  }

  /**
   * Get active boards count
   *
   * @return int
   */
  private function getActiveBoardsCount() {
    return Banca::join('membros_banca as mb', 'bancas.id', '=', 'mb.banca_id')
      ->where('mb.membro_instituicao_id', Auth::id())
      ->where('bancas.status', Banca::STATUS_PENDING)
    ->count();
  }

  /**
   * The next class
   *
   * @return mixed
   */
  private function getNextClass() {
    return Frequencia::join('membros_banca as mb', 'frequencias.banca_id', '=', 'mb.banca_id')
      ->where('mb.membro_instituicao_id', Auth::id())
      ->whereDate('frequencias.data', '>=', Carbon::now()->toDateString())
      ->orderBy('frequencias.data')
    ->first();
  }

  /**
   * Returns the authenticated professor published documents
   *
   * @return int
   */
  private function getDocumentsCount() {
    return Documento::join('membros_banca as mb', 'documentos.membro_banca_id', '=', 'mb.id')
      ->where('mb.membro_instituicao_id', '=', Auth::id())
    ->count();
  }

  /**
   * The next class
   *
   * @return mixed
   */
  private function getNextTask() {
    return Avaliacao::join('membros_banca as mb', 'avaliacoes.banca_id', '=', 'mb.banca_id')
      ->where('mb.membro_instituicao_id', Auth::id())
      ->whereDate('avaliacoes.data', '>=', Carbon::now()->toDateString())
      ->orderBy('avaliacoes.data')
    ->first();
  }

  /**
   * Returns the list of the boards for the authenticated user
   *
   * @return mixed
   */
  private function getBoardsList() {
    return Banca::join('membros_banca as mb', 'bancas.id', '=', 'mb.banca_id')
      ->where('mb.membro_instituicao_id', '=', Auth::id())
      ->where('bancas.status', Banca::STATUS_PENDING)
      ->orderBy('bancas.periodo_letivo')
    ->get('bancas.*');
  }

  /**
   * Returns a list of the next tasks
   *
   * @return mixed
   */
  private function getNextTasksList() {
    return Avaliacao::join('bancas as b', 'avaliacoes.banca_id', '=', 'b.id')
        ->join('membros_banca as mb', 'b.id', '=', 'mb.banca_id')
      ->where('mb.membro_instituicao_id', '=', Auth::id())
      ->whereDate('avaliacoes.data', '>=', Carbon::now()->toDateString())
      ->orderBy('avaliacoes.data')
    ->get('avaliacoes.*');
  }

  /**
   * Returns the list of the next classes
   *
   * @return mixed
   */
  public function getNextClassesList() {
    return Frequencia::join('bancas as b', 'frequencias.banca_id', '=', 'b.id')
        ->join('membros_banca as mb', 'b.id', '=', 'mb.banca_id')
      ->where('mb.membro_instituicao_id', '=', Auth::id())
      ->where('frequencias.data', '>=', Carbon::now()->toDateString())
      ->orderBy('frequencias.data')
    ->get('frequencias.*');
  }

  /**
   * Get the current students list of the authenticated professor
   *
   * @return mixed
   */
  public function getProfessorStudents() {
    return MembroInstituicao::join('membros_banca as mb', 'membros_instituicao.id', '=', 'mb.membro_instituicao_id')
      ->where('tipo_membro', MembroInstituicao::STUDENT)
      ->whereIn('mb.banca_id', function ($query) {
        return $query->select('b.id')
          ->from('bancas', 'b')
            ->join('membros_banca as mb', 'b.id', '=', 'mb.banca_id')
          ->where('mb.membro_instituicao_id', Auth::id())
          ->where('b.status', Banca::STATUS_PENDING);
      })
      ->groupBy('membros_instituicao.id')
    ->get('membros_instituicao.*');
  }

  /**
   * Get a list of recent documents (five of them)
   *
   * @return mixed
   */
  public function getRecentDocuments() {
    return Documento::join('membros_banca as mb', 'documentos.membro_banca_id', '=', 'mb.id')
      ->where('mb.membro_instituicao_id', Auth::id())
      ->orderByDesc('documentos.updated_at')
      ->limit(5)
    ->get('documentos.*');
  }
}
