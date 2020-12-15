<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\Graduacao;
use App\Models\Matricula;
use Illuminate\Http\Request;

class GraduationsController extends Controller
{
  /**
   * Return a list of students enrollments that can be graduated
   *
   * @return mixed
   */
  public function index() {
    $enrollments = Matricula::toBeGraduated();

    return view('coordinator.graduations.index', [ 'enrollments' => $enrollments ]);
  }

  /**
   * Graduates a enrollment (if it can be graduated, obviously)
   *
   * @param int $id The enrollment id
   *
   * @return mixed
   */
  public function graduate($id) {
    $enrollment = Matricula::find($id);

    // Verify if the enrollment can graduate
    if (!$enrollment->canGraduate()) {
      return view('coordinator.graduations.index', [
        'enrollments' => Matricula::toBeGraduated(),
        'cantGraduate' => true
      ]);
    }

    // Graduating the student
    Graduacao::create([
      'curso_id' => $enrollment->curso_id,
      'numero_titulo' => uniqid(mt_rand(1000000, 9999999)),
      'membro_instituicao_id' => $enrollment->membro_instituicao_id
    ]);

    // Change enrollment status to concluded
    $enrollment->update([ 'status' => Matricula::CONCLUDED ]);

    // Return to enrollments to be graduated list with message
    $enrollments = Matricula::toBeGraduated();
    return view('coordinator.graduations.index', [
      'enrollments' => $enrollments,
      'graduated' => true
    ]);
  }
}
