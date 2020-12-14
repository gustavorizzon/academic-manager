<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Models\Banca;
use App\Models\Frequencia;
use App\Models\FrequenciaMembroBanca;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class FrequenciesController extends Controller
{
  /**
   * Show the frequency data to the professor
   *
   * @param int $id The board ID
   * @param string $frequencyId The frequency ID
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function show($id, $frequencyId) {
    $board = Banca::find($id);

    if (Gate::denies('manage-board-as-professor', $board)) {
      return response()->json([
        'errors' => [
          'notAProfessor' => __('messages.permission.frequencies.not-a-professor')
        ],
      ], 403);
    }

    $class = $board->getClassById($frequencyId);
    if (empty($class)) {
      return response()->json([
        'errors' => [
          'frequencyNotFound' => __('messages.data.frequencies.not-found')
        ],
      ], 404);
    }

    $boardMembersFrequency = $class->boardMembersFrequency()
      ->join('membros_banca as mb', 'mb.id', '=', 'frequencias_membro_banca.membro_banca_id')
      ->join('membros_instituicao as mi', 'mi.id', '=', 'mb.membro_instituicao_id')
    ->get(['frequencias_membro_banca.*' , 'mi.nome']);

    $response = [
      'class_summary' => $class->resumo_aula,
      'frequencies' => $boardMembersFrequency
    ];

    return response()->json($response);
  }

  /**
   * Updates the frequency for board members
   *
   * @param int $id The board ID
   * @param string $frequencyId The frequency ID
   *
   * @return \Illuminate\Http\JsonResponse
   */
  public function update($id, $frequencyId, Request $request) {
    $board = Banca::find($id);

    if (Gate::denies('manage-board-as-professor', $board)) {
      return response()->json([
        'errors' => [
          'notAProfessor' => __('messages.permission.frequencies.not-a-professor')
        ],
      ], 403);
    }

    $class = $board->getClassById($frequencyId);
    if (empty($class)) {
      return response()->json([
        'errors' => [
          'frequencyNotFound' => __('messages.data.frequencies.not-found')
        ],
      ], 404);
    }

    // Deny update frequencies data after the class
    if (DateTime::createFromFormat('Y-m-d', $class->data) < (new DateTime)) {
      return response()->json([
        'errors' => [
          'alreadyTaught' => __('messages.data.frequencies.already-taught')
        ],
      ], 401);
    }

    $requestPayload = $request->json();
    $summary = $requestPayload->get('summary');
    $boardMemberFrequencies = $requestPayload->get('frequencies');
    $payloadFrequencyId = $requestPayload->get('frequency_id');

    // Validate violations
    if ($payloadFrequencyId !== $frequencyId) {
      return response()->json([
        'errors' => [
          'parametersViolation' => __('messages.request.parameters-violation')
        ]
      ], 400);
    }

    if (empty($summary)) {
      return response()->json([
        'errors' => [
          'emptySummary' => __('messages.validation.frequencies.empty-summary')
        ]
      ], 400);
    }

    try {
      // Update frequency summary
      $class->update([ 'resumo_aula' => $summary ]);

      // if there is no professor defined, then define the authenticated
      // user (professor) as the one who lectured the class.
      if (empty($class->membro_banca_id)) {
        $professor = $board->getBoardMemberByInstitutionMemberId(Auth::id());
        $class->update([ 'membro_banca_id' =>  $professor->id ]);
      }

      // Update all members frequency status
      foreach ($boardMemberFrequencies as $bmf) {
        FrequenciaMembroBanca::find($bmf['id'])->update([ 'presente' => $bmf['checked'] ]);
      }

      // Recalculate credits
      $board->recalculateMembersCredits();
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
