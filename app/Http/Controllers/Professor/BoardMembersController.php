<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Banca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BoardMembersController extends Controller
{
  /**
   * Returns a json response with the list of the members of the board
   *
   * @param int id The board id
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function index($id) {
    $board = Banca::find($id);

    if (Gate::denies('manage-board-as-professor', $board)) {
      return response()->json([
        'errors' => [
          'notAProfessor' => __('messages.permission.frequencies.not-a-professor')
        ],
      ], 403);
    }

    $members = $board->members()
      ->join('membros_instituicao as mi', 'membros_banca.membro_instituicao_id', '=', 'mi.id')
    ->get(['membros_banca.*', 'mi.nome']);

    return response()->json([
      'members' => $members
    ]);
  }
}
