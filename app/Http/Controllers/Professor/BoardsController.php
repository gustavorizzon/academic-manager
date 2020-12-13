<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Banca;
use App\Models\MembroBanca;
use App\Models\MembroInstituicao;
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

  /**
   * Finished the board if it is time
   *
   * @param int $boardId
   *
   * @return mixed
   */
  public function finish($boardId) {
    $board = Banca::find($boardId);

    if (Gate::denies('manage-board-as-professor', $board)) {
      return redirect()->back();
    }

    if ($board->hasNextClass() || $board->hasNextTask() || $board->status === Banca::STATUS_FINISHED) {
      return redirect()->back();
    }

    // Changing approved students status
    foreach ($board->studentsOnAverageAndAbove() as $student) {
      $student->update([ 'status' => MembroBanca::STATUS_APPROVED ]);
    }

    // If there is any student below the discipline's average
    $studentsBelowAverage = $board->studentsBelowAverage();
    if ($studentsBelowAverage->isNotEmpty()) {
      // first we check if any exam has already been applied
      if ($board->exams->isEmpty()) {
        // set the students below average status to "Exam"
        foreach ($studentsBelowAverage as $student) {
          $student->update([ 'status' => MembroBanca::STATUS_EXAM ]);
        }

        // if not, then we send a message to the professor, to create a exam
        return view('professor.boards.show', [
          'board' => $board,
          'examApplicationNeeded' => true
        ]);
      } else {
        // if the exam has already been applied and we get here, so
        // we have to disapprove the students bellow the average
        foreach ($studentsBelowAverage as $student) {
          $student->update([ 'status' => MembroBanca::STATUS_DISAPPROVED ]);
        }
      }
    }

    // If we get here then it's time to mark the board as finished
    $board->update([ 'status' => Banca::STATUS_FINISHED ]);

    // and return to the board view
    return view('professor.boards.show', [
      'board' => $board,
      'boardCompleted' => true
    ]);
  }
}
