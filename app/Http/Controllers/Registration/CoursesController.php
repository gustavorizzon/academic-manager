<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoursesRequest;
use App\Models\Curso;
use Illuminate\Http\Request;

class CoursesController extends Controller
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
   * Returns the index view of the Courses
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index() {
    $courses = Curso::orderBy('nome')->paginate(10);

    return view('registration.courses.index', ['courses' => $courses]);
  }

  /**
   * Returns the view with a form to register new Courses
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function create() {
    return view('registration.courses.create');
  }

  /**
   * Create new Course using request data
   *
   * @param CoursesRequest $request Request
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(CoursesRequest $request) {
    Curso::create($request->all());

    return redirect()->route('registration.courses.index');
  }

  /**
	 * Destroy a Course by given id
	 *
	 * @param mixed $id The course id
   *
   * @return array
	 */
  public function destroy($id) {
    try {
			Curso::find($id)->delete();
			return ['status' => 'success'];
		} catch (\Illuminate\Database\QueryException $qe) {
			return ['status' => 'error', 'message' => $qe->getMessage()];
		} catch (\PDOException $pdoe) {
			return ['status' => 'error', 'message' => $pdoe->getMessage()];
		}
  }

  /**
   * Returns the view with a form to edit a Course
   *
   * @param mixed $id The id of the Course to be edited
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function edit($id) {
    $course = Curso::find($id);

    return view('registration.courses.edit', ['course' => $course]);
  }

  /**
	 * Updates the Course and redirects to index route
	 *
	 * @param CoursesRequest $request Request
	 * @param mixed $id The course id
   *
   * @return \Illuminate\Http\RedirectResponse
	 */
  public function update(CoursesRequest $request, $id) {
    $course = Curso::find($id)->update($request->all());

    return redirect()->route('registration.courses.index');
  }
}
