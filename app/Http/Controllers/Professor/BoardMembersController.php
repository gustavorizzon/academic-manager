<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Banca;
use App\Models\MembroBanca;
use App\Models\MembroInstituicao;
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
      ->where('mi.tipo_membro', MembroInstituicao::STUDENT)
    ->get(['membros_banca.*', 'mi.nome']);

    return response()->json([
      'members' => $members
    ]);
  }

  /**
   * Returns a json response with the list of the members of the board in exam
   *
   * @param int id The board id
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function inExam($id) {
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
      ->where('mi.tipo_membro', MembroInstituicao::STUDENT)
      ->where('membros_banca.status', MembroBanca::STATUS_EXAM)
    ->get(['membros_banca.*', 'mi.nome']);

    return response()->json([
      'members' => $members
    ]);
  }
}
