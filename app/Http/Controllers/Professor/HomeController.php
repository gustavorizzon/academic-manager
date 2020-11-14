<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Banca;
use App\Models\Frequencia;
use App\Models\MembroBanca;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
}
