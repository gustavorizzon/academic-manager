<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Banca;
use App\Models\MembroBanca;
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
      'activeBoardsCount' => $this->getActiveBoardsCount()
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
}
