<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\StatesRequest;
use App\Models\Estado;
use Illuminate\Http\Request;

class StatesController extends Controller
{
  /**
   * Constructs the controller
   *
   * @return void
   */
  public function __construct() {
    $this->middleware(['auth', \App\Http\Middleware\Admin::class]);
  }

  /**
   * Returns the index view of the States
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index() {
    $states = Estado::orderBy('nome')->paginate(10);

    return view('registration.states.index', ['states' => $states]);
  }

  /**
   * Returns the view with a form to register new States
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function create() {
    return view('registration.states.create');
  }

  /**
   * Create new State using request data
   *
   * @param StatesRequest $request Request
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(StatesRequest $request) {
    Estado::create($request->all());

    return redirect()->route('registration.states.index');
  }

  /**
	 * Destroy a State by given id
	 *
	 * @param mixed $id The state id
   *
   * @return array
	 */
  public function destroy($id) {
    try {
			Estado::find($id)->delete();
			return ['status' => 'success'];
		} catch (\Illuminate\Database\QueryException $qe) {
			return ['status' => 'error', 'message' => $qe->getMessage()];
		} catch (\PDOException $pdoe) {
			return ['status' => 'error', 'message' => $pdoe->getMessage()];
		}
  }

  /**
   * Returns the view with a form to edit a State
   *
   * @param mixed $id The id of the State to be edited
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function edit($id) {
    $state = Estado::find($id);

    return view('registration.states.edit', ['state' => $state]);
  }

  /**
	 * Updates the State and redirects to index route
	 *
	 * @param AssociateRequest $request Request
	 * @param mixed $id The state id
   *
   * @return \Illuminate\Http\RedirectResponse
	 */
  public function update(StatesRequest $request, $id) {
    $state = Estado::find($id)->update($request->all());

    return redirect()->route('registration.states.index');
  }
}
