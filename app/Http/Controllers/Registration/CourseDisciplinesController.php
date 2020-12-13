<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseDisciplinesRequest;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\DisciplinaCurso;
use Illuminate\Http\Request;

class CourseDisciplinesController extends Controller
{
  /**
   * Constructs the controller
   *
   * @return void
   */
  public function __construct() {
    $this->middleware([
      'auth',
      \App\Http\Middleware\Coordinator::class
    ]);
  }

  /**
   * Returns the index view of the CourseDisciplines
   *
   * @param int $course_id Course ID
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index($course_id) {
    // Checking if the given id is a valid course ID
    if (!Curso::find($course_id)) {
      return redirect()->back();
    }

    $course_disciplines = DisciplinaCurso::where('curso_id', $course_id)->get();

    return view('registration.course_disciplines.index', [
      'course_disciplines' => $course_disciplines,
      'course_id' => $course_id
    ]);
  }

  /**
   * Returns the view with a form to register new CourseDisciplines
   *
   * @param int $course_id The Course ID
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function create($course_id) {
    return view('registration.course_disciplines.create', [
      'course_id' => $course_id
    ]);
  }

  /**
   * Adds a new Discipline to the Course using request data
   *
   * @param CourseDisciplinesRequest $request Request
   * @param int $course_id The Course ID
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(CourseDisciplinesRequest $request, $course_id) {
    $requestData = $request->all();

    // Integrity check
    if ($course_id !== $requestData['curso_id']) {
      return redirect()->back()->withErrors([
        'parameters-violation' => __('messages.request.parameters-violation')
      ]);
    }

    // Deny add the same discipline twice
    $course = Curso::find($course_id);
    if ($course->hasDiscipline($requestData['disciplina_id'])) {
      return redirect()->back()->withErrors([
        'disciplina_id' => __('messages.validation.unique-discipline-in-course')
      ]);
    }

    // Adds the discipline to the course
    DisciplinaCurso::create($requestData);

    // Update semesters count based on its disciplines count divided by 5
    $course->autoUpdateSemestersCount();

    return redirect()->route('registration.courses.disciplines.index', [
      'id' => $course_id
    ]);
  }

  /**
	 * Remove a Discipline from a Course by given id
	 *
	 * @param int $course_id The course id
   * @param int $course_discipline_id The course discipline id
   *
   * @return array
	 */
  public function destroy($course_id, $course_discipline_id) {
    try {
      // Remove the discipline from course
      DisciplinaCurso::where('id', $course_discipline_id)
                     ->where('curso_id', $course_id)
                     ->get()
                     ->first()
                     ->delete();

      // Update semesters count based on its disciplines count divided by 5
      Curso::find($course_id)->autoUpdateSemestersCount();

			return ['status' => 'success'];
		} catch (\Illuminate\Database\QueryException $qe) {
			return ['status' => 'error', 'message' => $qe->getMessage()];
		} catch (\PDOException $pdoe) {
			return ['status' => 'error', 'message' => $pdoe->getMessage()];
		}
  }

  /**
   * Returns the view with a form to edit a course discipline
   *
   * @param mixed $course_id The id of the course
   * @param mixed $course_discipline_id The id of the course discipline to be edited
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function edit($course_id, $course_discipline_id) {
    $course_discipline = DisciplinaCurso::find($course_discipline_id);

    return view('registration.course_disciplines.edit', ['course_discipline' => $course_discipline]);
  }

  /**
	 * Updates the course discipline and redirects to index route
	 *
	 * @param CourseDisciplinesRequest $request Request
	 * @param mixed $course_id The course id
	 * @param mixed $course_discipline_id The course discipline id to be updated
   *
   * @return \Illuminate\Http\RedirectResponse
	 */
  public function update(CourseDisciplinesRequest $request, $course_id, $course_discipline_id) {
    $requestData = $request->all();

    if ($course_id !== $requestData['curso_id']) {
      return redirect()->back()->withErrors([
        'parameters-violation' => __('messages.request.parameters-violation')
      ]);
    }

    // Deny add the same discipline twice
    $course = Curso::find($course_id);
    if ($requestData['disciplina_id'] !== $course_discipline_id) {
      if ($course->hasDiscipline($requestData['disciplina_id'])) {
        return redirect()->back()->withErrors([
          'disciplina_id' => __('messages.validation.unique-discipline-in-course')
        ]);
      }
    }

    // Adds the discipline to the course
    DisciplinaCurso::find($course_discipline_id)->update($requestData);

    // Update semesters count based on its disciplines count divided by 5
    $course->autoUpdateSemestersCount();

    return redirect()->route('registration.courses.disciplines.index', ['id' => $course_id]);
  }
}
