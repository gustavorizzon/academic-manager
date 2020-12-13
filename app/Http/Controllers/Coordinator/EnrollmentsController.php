<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnrollmentsRequest;
use App\Models\Matricula;
use Illuminate\Http\Request;

class EnrollmentsController extends Controller
{
  /**
   * Returns the index view of the Enrollments
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index() {
    $enrollments = Matricula::orderBy('created_at', 'desc')->paginate(10);

    return view('coordinator.enrollments.index', ['enrollments' => $enrollments]);
  }

  /**
   * Returns the view with a form to register new Enrollments
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function create() {
    return view('coordinator.enrollments.create');
  }

  /**
   * Create new Enrollment using request data
   *
   * @param EnrollmentsRequest $request Request
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(EnrollmentsRequest $request) {
    $requestData = $request->all();

    // Check if a student has a enrollment active
    $alreadyEnrolled = (bool) Matricula::where('status', Matricula::ENROLLED)
      ->where('membro_instituicao_id', $requestData['membro_instituicao_id'])
    ->count();

    if ($alreadyEnrolled) {
      return redirect()->back()->withErrors([
        'membro_instituicao_id' => __('messages.validation.enrollment-unique')
      ]);
    }

    // Check if the student already has been enrolled for the course
    $alreadyEnrolledInCourse = (bool) Matricula::where('membro_instituicao_id', $requestData['membro_instituicao_id'])
      ->where('curso_id', $requestData['curso_id'])
    ->count();

    if ($alreadyEnrolledInCourse) {
      return redirect()->back()->withErrors([
        'membro_instituicao_id' => __('messages.validation.enrollment-same-course-twice')
      ]);
    }

    Matricula::create($requestData);

    return redirect()->route('coordinator.enrollments.index');
  }

  /**
	 * Destroy a Enrollment by given id
	 *
	 * @param mixed $id The enrollment id
   *
   * @return array
	 */
  public function destroy($id) {
    try {
			Matricula::find($id)->delete();
			return ['status' => 'success'];
		} catch (\Illuminate\Database\QueryException $qe) {
			return ['status' => 'error', 'message' => $qe->getMessage()];
		} catch (\PDOException $pdoe) {
			return ['status' => 'error', 'message' => $pdoe->getMessage()];
		}
  }

  /**
   * Returns the view with a form to edit a Enrollment
   *
   * @param mixed $id The id of the Enrollment to be edited
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function edit($id) {
    $enrollment = Matricula::find($id);

    return view('coordinator.enrollments.edit', ['enrollment' => $enrollment]);
  }

  /**
	 * Updates the Enrollment and redirects to index route
	 *
	 * @param AssociateRequest $request Request
	 * @param mixed $id The enrollment id
   *
   * @return \Illuminate\Http\RedirectResponse
	 */
  public function update(EnrollmentsRequest $request, $id) {
    $requestData = $request->all();

    // Check if a student has a enrollment active
    $alreadyEnrolled = (bool) Matricula::where('status', Matricula::ENROLLED)
      ->where('membro_instituicao_id', $requestData['membro_instituicao_id'])
      ->where('id', '<>', $id)
    ->count();

    if ($alreadyEnrolled) {
      return redirect()->back()->withErrors([
        'membro_instituicao_id' => __('messages.validation.enrollment-unique')
      ]);
    }

    // Check if the student already has been enrolled for the course
    $alreadyEnrolledInCourse = (bool) Matricula::where('membro_instituicao_id', $requestData['membro_instituicao_id'])
      ->where('curso_id', $requestData['curso_id'])
      ->where('id', '<>', $id)
    ->count();

    if ($alreadyEnrolledInCourse) {
      return redirect()->back()->withErrors([
        'membro_instituicao_id' => __('messages.validation.enrollment-same-course-twice')
      ]);
    }

    Matricula::find($id)->update($requestData);

    return redirect()->route('coordinator.enrollments.index');
  }
}
