<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\CitiesRequest;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CitiesController extends Controller
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
   * Returns the index view of the Cities
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index() {
    $cities = Cidade::orderBy('nome')->paginate(10);

    return view('registration.cities.index', ['cities' => $cities]);
  }

  /**
   * Returns the view with a form to register new Cities
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function create() {
    return view('registration.cities.create');
  }

  /**
   * Create new City using request data
   *
   * @param CitiesRequest $request Request
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(CitiesRequest $request) {
    Cidade::create($request->all());

    return redirect()->route('registration.cities.index');
  }

  /**
	 * Destroy a City by given id
	 *
	 * @param mixed $id The city id
   *
   * @return array
	 */
  public function destroy($id) {
    try {
			Cidade::find($id)->delete();
			return ['status' => 'success'];
		} catch (\Illuminate\Database\QueryException $qe) {
			return ['status' => 'error', 'message' => $qe->getMessage()];
		} catch (\PDOException $pdoe) {
			return ['status' => 'error', 'message' => $pdoe->getMessage()];
		}
  }

  /**
   * Returns the view with a form to edit a City
   *
   * @param mixed $id The id of the City to be edited
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function edit($id) {
    $city = Cidade::find($id);

    return view('registration.cities.edit', ['city' => $city]);
  }

  /**
	 * Updates the City and redirects to index route
	 *
	 * @param AssociateRequest $request Request
	 * @param mixed $id The city id
   *
   * @return \Illuminate\Http\RedirectResponse
	 */
  public function update(CitiesRequest $request, $id) {
    $city = Cidade::find($id)->update($request->all());

    return redirect()->route('registration.cities.index');
  }
}
