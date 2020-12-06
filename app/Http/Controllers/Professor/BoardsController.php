<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Banca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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

  /**
   * Returns the professor visualization of the board
   *
   * @param mixed $id
   */
  public function show($id) {
    $board = Banca::find($id);

    if (Gate::denies('manage-board-as-professor', $board)) {
      return redirect()->back();
    }

    return view('professor.boards.show', ['board' => $board]);
  }

  /**
   * Updates the board description using request data
   *
   * @param Request $request The request
   *
   * @return mixed
   */
  public function updateDescription(Request $request) {
    $jsonPayload = $request->json();

    $board = Banca::find($jsonPayload->get('board_id'));
    if (Gate::denies('manage-board-as-professor', $board)) {
      return response()->json([
        'errors' => [
          'notAProfessor' => __('messages.permission.boards.not-a-professor')
        ],
      ], 403);
    }

    $board->update([
      'descricao' => $jsonPayload->get('description')
    ]);

    return response()->json();
  }
}
