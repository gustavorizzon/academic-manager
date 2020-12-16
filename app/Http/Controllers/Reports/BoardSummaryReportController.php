<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use App\Models\Banca;
use App\Models\MembroInstituicao;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;

class BoardSummaryReportController extends Controller
{
  /**
   * Show a list with only the concluded boards
   *
   * If the user is a professor, filter only his boards
   *
   * @return mixed
   */
  public function concluded() {
    if (Gate::denies('boards-summary-report')) {
      return redirect()->back();
    }

    $user = Auth::user();
    $boards = Banca::select('bancas.*')
                   ->where('bancas.status', true)
                   ->orderByDesc('bancas.updated_at');

    // If the user is a professor, filter only his boards
    if ($user->tipo_membro === MembroInstituicao::PROFESSOR) {
      $boards->join('membros_banca as mb', 'mb.banca_id', '=', 'bancas.id')
        ->where('mb.membro_instituicao_id', $user->id);
    }

    return view('common.boards.index', [
      'pageTitle' => 'Concluded boards',
      'cardTitle' => 'Concluded boards list',
      'cardColor' => 'primary',
      'rowClickRoute' => 'reports.boards.summary',
      'boards' => $boards->paginate(10)
    ]);
  }

  /**
   * Generate a PDF with the board summary
   *
   * @param int $id The board id
   *
   * @return mixed
   */
  public function summary($id) {
    if (Gate::denies('boards-summary-report')) {
      return redirect()->back();
    }

    $board = Banca::find($id);

    if (Auth::user()->tipo_membro === MembroInstituicao::PROFESSOR) {
      if (Gate::denies('view-board-as-professor', $board)) {
        return redirect()->back();
      }
    }

    if ($board->status !== Banca::STATUS_FINISHED) {
      return redirect()->back();
    }

    $pdf = PDF::loadView('reports.boards.summary', [
      'board' => $board,
      'tableColor' => '#007bff'
    ]);

    return $pdf->download(
      $board->courseDiscipline->discipline->nome
      . ' (' . $board->id . ')'
      . ' - ' . __('Board Summary')
      . '.pdf'
    );
  }
}
