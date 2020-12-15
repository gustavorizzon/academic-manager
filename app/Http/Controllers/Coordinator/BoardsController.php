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

class BoardsController extends Controller
{
  /**
   * List all pending boards
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index() {
    $paginatedBoards = Banca::where('status', Banca::STATUS_PENDING)->paginate(7);

    return view('coordinator.boards.index', [ 'boards' => $paginatedBoards ]);
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

  /**
   * Returns the professor visualization of the board
   *
   * @param mixed $id
   */
  public function show($id) {
    $board = Banca::find($id);

    return view('coordinator.boards.show', ['board' => $board]);
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
    $boardsGenerated = false;

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

        $boardsGenerated = true;
      }
    } catch (\Exception $e) {
      $boardsGenerated = false;

      DB::rollBack();
    }

    $enrollments = Matricula::withoutABoardGroupedByCourse();

    return view('coordinator.boards.generation.index', [
      'enrollments' => $enrollments,
      'boardGenerated' => $boardsGenerated
    ]);
  }

  /**
   * Updates the board class using request data
   *
   * @param Request $request The request
   *
   * @return mixed
   */
  public function updateClassroom(Request $request) {
    $jsonPayload = $request->json();

    Banca::find($jsonPayload->get('board_id'))->update([
      'sala' => $jsonPayload->get('classroom')
    ]);

    return response()->json();
  }

  /**
   * Adds a professor to a board
   *
   * @param int $boardId
   * @param Request $request
   *
   * @return mixed
   */
  public function addProfessor($boardId, Request $request) {
    $board = Banca::find($boardId);
    $professor = MembroInstituicao::find($request->json()->get('professor_id'));

    if ($board->hasProfessor($professor)) {
      return response()->json([
        'errors' => [
          'professorAlreadyAdded' => __('messages.data.boards.professors.professor-twice')
        ]
      ], 400);
    }

    $boardMember = MembroBanca::create([
      'membro_instituicao_id' => $professor->id,
      'banca_id' => $board->id,
      'creditos' => 0,
      'status' => MembroBanca::STATUS_ENROLLED
    ]);

    return response()->json([
      'member_id' => $boardMember->id,
      'professor_name' => $professor->nome
    ]);
  }

  /**
   * Removes a professor from the board
   *
   * @param int $boardId
   * @param int $memberId
   *
   * @return mixed
   */
  public function removeProfessor($boardId, $memberId) {
    $board = Banca::find($boardId);
    $member = MembroBanca::find($memberId);
    $professor = MembroInstituicao::find($member->membro_instituicao_id);

    if (!$board->hasProfessor($professor)) {
      return response()->json([
        'errors' => [
          'notABoardProfessor' => __('messages.data.boards.professors.not-in-board')
        ]
      ], 400);
    }

    try {
      $member->delete();
    } catch (\Exception $e) {
      return response()->json([
        'errors' => [
          'unexpected' => __('messages.errors.unexpected')
        ]
      ], 500);
    }

    return response()->json();
  }

  /**
   * Set the student status to WAIVER
   *
   * @param int $boardId
   * @param int $memberId
   *
   * @return mixed
   */
  public function studentWaiver($boardId, $memberId) {
    $board = Banca::find($boardId);
    $member = MembroBanca::find($memberId);
    $student = MembroInstituicao::find($member->membro_instituicao_id);

    if (!$board->hasStudent($student)) {
      return response()->json([
        'errors' => [
          'notABoardStudent' => __('messages.data.boards.students.not-in-board')
        ]
      ], 400);
    }

    $member->update([ 'status' => MembroBanca::STATUS_WAIVER ]);

    return response()->json();
  }

  /**
   * Update the a frequency date
   *
   * @param int $boardId
   * @param int $frequencyId
   * @param Request $request
   *
   * @return mixed
   */
  public function updateFrequencyDate($boardId, $frequencyId, Request $request) {
    $board = Banca::find($boardId);
    $frequency = Frequencia::find($frequencyId);
    $newDate = $request->json()->get('date');
    $futureFrequencyDates = $board->frequencies()
                                  ->whereDate('data', '>', Carbon::now()->toDateString())
                                  ->pluck('data')
                                  ->toArray();

    if ($frequency->banca_id !== $board->id) {
      return response()->json([
        'errors' => [
          'notABoardFrequency' => __('messages.data.frequencies.not-found')
        ]
      ], 400);
    }

    if (DateTime::createFromFormat('Y-m-d', $frequency->data) < (new DateTime)) {
      return response()->json([
        'errors' => [
          'classAlreadyTaught' => __('messages.data.frequencies.already-taught')
        ]
      ], 400);
    }

    if (DateTime::createFromFormat('Y-m-d', $newDate) < (new DateTime)) {
      return response()->json([
        'errors' => [
          'onlyDatesInTheFuture' => __('messages.data.frequencies.only-dates-in-the-future')
        ]
      ], 400);
    }

    if (in_array($newDate, $futureFrequencyDates)) {
      return response()->json([
        'errors' => [
          'dateAlreadyTaken' => __('messages.data.frequencies.date-already-taken')
        ]
      ], 400);
    }

    $frequency->update([ 'data' =>  $newDate]);

    return response()->json();
  }
}
