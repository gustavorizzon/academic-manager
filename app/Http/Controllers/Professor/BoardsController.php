<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Banca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoardsController extends Controller
{
  /**
   * Returns the boards list view
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index() {
    $boards = Banca::join('membros_banca as mb', 'bancas.id', '=', 'mb.banca_id')
      ->where('mb.membro_instituicao_id', Auth::id())
      ->where('bancas.status', Banca::STATUS_PENDING)
    ->get('bancas.*');

    return view('professor.boards.index', ['boards' => $boards]);
  }
}
