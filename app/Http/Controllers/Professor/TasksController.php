<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Http\Requests\BoardMemberTasksRequest;
use App\Http\Requests\TasksRequest;
use App\Models\Avaliacao;
use App\Models\Banca;
use App\Models\AvaliacaoMembroBanca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
  /**
   * Show the task data to the professor
   *
   * @param int $id The board ID
   * @param string $taskId The task ID
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function show($id, $taskId) {
    $board = Banca::find($id);

    if (Gate::denies('manage-board-as-professor', $board)) {
      return response()->json([
        'errors' => [
          'notAProfessor' => __('messages.permission.tasks.not-a-professor')
        ],
      ], 403);
    }

    $task = $board->getTaskById($taskId);
    if (empty($task)) {
      return response()->json([
        'errors' => [
          'taskNotFound' => __('messages.data.tasks.not-found')
        ],
      ], 404);
    }

    $boardMembersTask = $task->boardMembersTask()
      ->join('membros_banca as mb', 'mb.id', '=', 'avaliacoes_membro_banca.membro_banca_id')
      ->join('membros_instituicao as mi', 'mi.id', '=', 'mb.membro_instituicao_id')
    ->get(['avaliacoes_membro_banca.*' , 'mi.nome']);

    return response()->json([
      'date' => $task->data,
      'content' => $task->conteudo,
      'weight' => $task->peso,
      'type' => $task->tipo,
      'members' => $boardMembersTask
    ]);
  }

  /**
   * Creates a task
   *
   * @param int $id The board id
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function create($id, Request $request) {
    $board = Banca::find($id);

    if (Gate::denies('manage-board-as-professor', $board)) {
      return response()->json([
        'errors' => [
          'notAProfessor' => __('messages.permission.tasks.not-a-professor')
        ],
      ], 403);
    }

    $requestPayload = $request->json();
    $boardMemberTasks = $requestPayload->get('grades');
    $taskData = [
      'data' => $requestPayload->get('date'),
      'peso' => $requestPayload->get('weight'),
      'conteudo' => $requestPayload->get('content'),
      'tipo' => $requestPayload->get('type'),
      'banca_id' => $board->id
    ];

    try {
      // Board task creation
      $tasksValidationRules = (new TasksRequest)->rules();
      $validator = Validator::make($taskData, $tasksValidationRules);

      // Validating
      if ($validator->fails()) {
        throw new \Exception($validator->errors()->first(), 400);
      }

      // Creating task
      $createdTask = Avaliacao::create($taskData);

      // Membros da banca
      $boardMemberTasksValidationRules = (new BoardMemberTasksRequest)->rules();
      $validationRulesNeeded = [
        'nota' => $boardMemberTasksValidationRules['nota']
      ];

      // Validate and Update all members task grade
      foreach ($boardMemberTasks as $bmt) {
        $validator = Validator::make([ 'nota' => $bmt['value'] ], $validationRulesNeeded);
        if ($validator->fails()) {
          throw new \Exception(__('messages.validation.task-grade-invalid'), 400);
        }

        $bmtData = [
          'nota' => $bmt['value'],
          'membro_banca_id' => $bmt['member_id'],
          'avaliacao_id' => $createdTask->id
        ];

        AvaliacaoMembroBanca::create($bmtData);
      }
    } catch (\Exception $e) {
      if ($e->getCode() === 400) {
        return response()->json([
          'errors' => [
            'invalidData' => $e->getMessage()
          ]
        ], $e->getCode());
      }

      return response()->json([
        'errors' => [
          'unexpected' => __('messages.errors.unexpected'),
        ]
      ], 500);
    }

    return response()->json([ 'task_id' => $createdTask->id ]);
  }

  /**
   * Updates the task for board members
   *
   * @param int $id The board ID
   * @param string $taskId The task ID
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function update($id, $taskId, Request $request) {
    $board = Banca::find($id);

    if (Gate::denies('manage-board-as-professor', $board)) {
      return response()->json([
        'errors' => [
          'notAProfessor' => __('messages.permission.tasks.not-a-professor')
        ],
      ], 403);
    }

    $task = $board->getTaskById($taskId);
    if (empty($task)) {
      return response()->json([
        'errors' => [
          'taskNotFound' => __('messages.data.tasks.not-found')
        ],
      ], 404);
    }

    $requestPayload = $request->json();
    $boardMemberTasks = $requestPayload->get('grades');
    $payloadTaskId = $requestPayload->get('task_id');
    $taskData = [
      'data' => $requestPayload->get('date'),
      'peso' => $requestPayload->get('weight'),
      'conteudo' => $requestPayload->get('content'),
      'tipo' => $requestPayload->get('type')
    ];

    // Validate violations
    if ($payloadTaskId !== $taskId) {
      return response()->json([
        'errors' => [
          'parametersViolation' => __('messages.request.parameters-violation')
        ]
      ], 400);
    }

    try {
      // Board task update
      $tasksValidationRules = (new TasksRequest)->rules();
      $validator = Validator::make($taskData, $tasksValidationRules);

      // Validating
      if ($validator->fails()) {
        throw new \Exception($validator->errors()->first(), 400);
      }

      // Updating task info
      Avaliacao::find($taskId)->update($taskData);


      // Board member tasks
      $boardMemberTasksValidationRules = (new BoardMemberTasksRequest)->rules();
      $validationRulesNeeded = [
        'nota' => $boardMemberTasksValidationRules['nota']
      ];

      // Validate and Update all members task grade
      foreach ($boardMemberTasks as $bmt) {
        $valuesToUpdate = [
          'nota' => $bmt['value']
        ];

        $validator = Validator::make($valuesToUpdate, $validationRulesNeeded);
        if ($validator->fails()) {
          throw new \Exception(__('messages.validation.task-grade-invalid'), 400);
        }

        AvaliacaoMembroBanca::find($bmt['id'])->update($valuesToUpdate);
      }
    } catch (\Exception $e) {
      if ($e->getCode() === 400) {
        return response()->json([
          'errors' => [
            'invalidData' => $e->getMessage()
          ]
        ], $e->getCode());
      }

      return response()->json([
        'errors' => [
          'unexpected' => __('messages.errors.unexpected'),
        ]
      ], 500);
    }

    return response()->json();
  }

  /**
   * Destroys a task and its grades
   *
   * @param int $id The board ID
   * @param int $taskId The task id
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function destroy($id, $taskId) {
    $board = Banca::find($id);

    if (Gate::denies('manage-board-as-professor', $board)) {
      return response()->json([
        'errors' => [
          'notAProfessor' => __('messages.permission.tasks.not-a-professor')
        ],
      ], 403);
    }

    try {
      AvaliacaoMembroBanca::where('avaliacao_id', $taskId)->delete();
      Avaliacao::find($taskId)->delete();
    } catch (\Exception $e) {
      return response()->json([
        'errors' => [
          'unexpected' => __('messages.errors.unexpected'),
        ]
      ], 500);
    }

    return response()->json();
  }
}
