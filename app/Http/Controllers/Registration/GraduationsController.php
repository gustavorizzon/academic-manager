<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\GraduationsRequest;
use App\Models\Graduacao;
use Illuminate\Http\Request;

class GraduationsController extends Controller
{
  /**
   * Constructs the controller
   *
   * @return void
   */
  public function __construct() {
    $this->middleware([
      'auth',
      \App\Http\Middleware\AdminCoordinator::class
    ]);
  }

  /**
   * Returns the index view of the Graduations
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index() {
    $graduations = Graduacao::paginate(10);

    return view('registration.graduations.index', ['graduations' => $graduations]);
  }

  /**
   * Returns the view with a form to register new Graduations
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function create() {
    return view('registration.graduations.create');
  }

  /**
   * Create new Graduation using request data
   *
   * @param GraduationsRequest $request Request
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(GraduationsRequest $request) {
    Graduacao::create($request->all());

    return redirect()->route('registration.graduations.index');
  }

  /**
	 * Destroy a Graduation by given id
	 *
	 * @param mixed $id The graduation id
   *
   * @return array
	 */
  public function destroy($id) {
    try {
			Graduacao::find($id)->delete();
			return ['status' => 'success'];
		} catch (\Illuminate\Database\QueryException $qe) {
			return ['status' => 'error', 'message' => $qe->getMessage()];
		} catch (\PDOException $pdoe) {
			return ['status' => 'error', 'message' => $pdoe->getMessage()];
		}
  }

  /**
   * Returns the view with a form to edit a Graduation
   *
   * @param mixed $id The id of the Graduation to be edited
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function edit($id) {
    $graduation = Graduacao::find($id);

    return view('registration.graduations.edit', ['graduation' => $graduation]);
  }

  /**
	 * Updates the Graduation and redirects to index route
	 *
	 * @param AssociateRequest $request Request
	 * @param mixed $id The graduation id
   *
   * @return \Illuminate\Http\RedirectResponse
	 */
  public function update(GraduationsRequest $request, $id) {
    $graduation = Graduacao::find($id)->update($request->all());

    return redirect()->route('registration.graduations.index');
  }
}
