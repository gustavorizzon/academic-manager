<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\Banca;
use Illuminate\Http\Request;

class BoardsController extends Controller
{
  /**
   * List all pending boards
   *
   * @return mixed
   */
  public function index() {
    $paginatedBoards = Banca::where('status', Banca::STATUS_PENDING)->paginate(7);

    return view('coordinator.boards.index', [
      'boards' => $paginatedBoards
    ]);
  }

  public function show() {

  }

  public function generationIndex() {

  }
}
