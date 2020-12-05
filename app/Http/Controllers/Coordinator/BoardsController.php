<?php

namespace App\Http\Controllers\Coordinator;

use App\Helpers\Date;
use App\Helpers\SchoolYear;
use App\Http\Controllers\Controller;
use App\Models\Banca;
use App\Models\Curso;
use App\Models\Feriado;
use App\Models\Frequencia;
use App\Models\FrequenciaMembroBanca;
use App\Models\Matricula;
use App\Models\MembroBanca;
use App\Models\MembroInstituicao;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BoardsController extends Controller
{
  /**
   * List all pending boards
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index(Request $request) {
    $data = [];

    $paginatedBoards = Banca::where('status', Banca::STATUS_PENDING)->paginate(7);
    $data['boards'] = $paginatedBoards;

    if ($request->session()->has('boardsGenerated')) {
      $data['generated'] = $request->session()->get('boardsGenerated');
      $request->session()->forget('boardsGenerated');
    }

    return view('coordinator.boards.index', $data);
  }

  /**
   * List all boards with pendencies
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function pendencies() {
    return view('coordinator.boards.pendencies', [
      'boards' => Banca::where('sala', '')
        ->orWhereDoesntHave('members', function (Builder $query) {
          return $query->join('membros_instituicao as mi', 'membros_banca.membro_instituicao_id', '=', 'mi.id')
            ->where('mi.tipo_membro', MembroInstituicao::PROFESSOR);
        })
      ->paginate(6)
    ]);
  }

  public function show() {

  }

  /**
   * List all courses that have enrollments without a board
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function generationIndex() {
    $enrollments = Matricula::withoutABoardGroupedByCourse();

    return view('coordinator.boards.generation.index', [
      'enrollments' => $enrollments
    ]);
  }

  /**
   * Generate boards for the course
   *
   * @param int $courseId The course id to generate the boards
   */
  public function generate($courseId) {
    $generated = false;

    try {
      // Using transactions to maintain consistency
      DB::beginTransaction();

      // Getting needed objects
      $course = Curso::find($courseId);
      $courseDisciplines = $course->courseDisciplines()->get();
      $enrollments = Matricula::withoutABoardWhereCourseId($course->id);
      $holidays = Feriado::whereDate('data', '>', Carbon::now()->toDateString())->pluck('data')->toArray();

      // Creating a board for each course discipline
      if ($enrollments->isNotEmpty()) {
        foreach ($courseDisciplines as $i => $courseDiscipline) {
          $semestersOffset = floor($i / 5);
          $baseDate = Date::addSemester(new DateTime, $semestersOffset);
          $weekDayDate = Date::getWeekdayDate($baseDate, 1 + $i - (5 * floor($i / 5)));

          // Board
          $board = Banca::create([
            'descricao' => '',
            'periodo_letivo' => SchoolYear::get($semestersOffset),
            'status' => false,
            'sala' => '',
            'disciplina_curso_id' => $courseDiscipline->id
          ]);

          // Board members
          $boardMembers = [];
          foreach ($enrollments as $enrollment) {
            $boardMembers[] = MembroBanca::create([
              'membro_instituicao_id' => $enrollment->membro_instituicao_id,
              'banca_id' => $board->id,
              'creditos' => 0,
              'status' => MembroBanca::STATUS_ENROLLED
            ]);
          }

          // Frequencies
          $nFreqs = round($courseDiscipline->discipline->total_creditos / $course->horas_turno);
          for ($f = 0; $f < $nFreqs; $f++) {
            $frequency = Frequencia::create([
              'resumo_aula' => '',
              'banca_id' => $board->id,
              'data' => Date::nextDateAfterWeek($weekDayDate, $holidays)
            ]);

            foreach ($boardMembers as $boardMember) {
              FrequenciaMembroBanca::create([
                'presente' => false,
                'membro_banca_id' => $boardMember->id,
                'frequencia_id' => $frequency->id
              ]);
            }
          }
        }

        DB::commit();

        $generated = true;
      }
    } catch (\Exception $e) {
      DB::rollBack();
    }

    return redirect()
      ->route('coordinator.boards.generation.index')
      ->with([
        'boardsGenerated' => $generated
      ]);
  }
}
