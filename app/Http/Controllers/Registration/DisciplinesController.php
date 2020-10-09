<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\DisciplinesRequest;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinesController extends Controller
{
  /**
   * Constructs the controller
   *
   * @return void
   */
  public function __construct() {
    $this->middleware(['auth', \App\Http\Middleware\Coordinator::class]);
  }

  /**
   * Returns the index view of the Disciplines
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index() {
    $disciplines = Disciplina::orderBy('nome')->paginate(10);

    return view('registration.disciplines.index', ['disciplines' => $disciplines]);
  }

  /**
   * Returns the view with a form to register new Disciplines
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function create() {
    return view('registration.disciplines.create');
  }

  /**
   * Create new Discipline using request data
   *
   * @param DisciplinesRequest $request Request
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(DisciplinesRequest $request) {
    Disciplina::create($request->all());

    return redirect()->route('registration.disciplines.index');
  }

  /**
	 * Destroy a Discipline by given id
	 *
	 * @param mixed $id The discipline id
   *
   * @return array
	 */
  public function destroy($id) {
    try {
			Disciplina::find($id)->delete();
			return ['status' => 'success'];
		} catch (\Illuminate\Database\QueryException $qe) {
			return ['status' => 'error', 'message' => $qe->getMessage()];
		} catch (\PDOException $pdoe) {
			return ['status' => 'error', 'message' => $pdoe->getMessage()];
		}
  }

  /**
   * Returns the view with a form to edit a Discipline
   *
   * @param mixed $id The id of the Discipline to be edited
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function edit($id) {
    $discipline = Disciplina::find($id);

    return view('registration.disciplines.edit', ['discipline' => $discipline]);
  }

  /**
	 * Updates the Discipline and redirects to index route
	 *
	 * @param DisciplinesRequest $request Request
	 * @param mixed $id The discipline id
   *
   * @return \Illuminate\Http\RedirectResponse
	 */
  public function update(DisciplinesRequest $request, $id) {
    $discipline = Disciplina::find($id)->update($request->all());

    return redirect()->route('registration.disciplines.index');
  }
}
