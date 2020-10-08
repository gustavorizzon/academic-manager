<?php

namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\InstitutionMembersRequest;
use App\Models\MembroInstituicao;
use Illuminate\Http\Request;

class InstitutionMembersController extends Controller
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
   * Returns the index view of the Institution Members
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index() {
    $institution_members = MembroInstituicao::orderBy('nome')->paginate(10);

    return view('registration.institution_members.index', ['institution_members' => $institution_members]);
  }

  /**
   * Returns the view with a form to register new Institution Members
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function create() {
    return view('registration.institution_members.create');
  }

  /**
   * Create new Institution Member using request data
   *
   * @param InstitutionMembersRequest $request Request
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(InstitutionMembersRequest $request) {
    $data = $request->all();
    $data['senha'] = bcrypt($data['senha']);
    MembroInstituicao::create($data);

    return redirect()->route('registration.institution_members.index');
  }

  /**
	 * Destroy a Institution Member by given id
	 *
	 * @param mixed $id The institution_member id
   *
   * @return array
	 */
  public function destroy($id) {
    try {
			MembroInstituicao::find($id)->delete();
			return ['status' => 'success'];
		} catch (\Illuminate\Database\QueryException $qe) {
			return ['status' => 'error', 'message' => $qe->getMessage()];
		} catch (\PDOException $pdoe) {
			return ['status' => 'error', 'message' => $pdoe->getMessage()];
		}
  }

  /**
   * Returns the view with a form to edit a Institution Member
   *
   * @param mixed $id The id of the Institution Member to be edited
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function edit($id) {
    $institution_member = MembroInstituicao::find($id);

    return view('registration.institution_members.edit', ['institution_member' => $institution_member]);
  }

  /**
	 * Updates the Institution Member and redirects to index route
	 *
	 * @param InstitutionMembersRequest $request Request
	 * @param mixed $id The institution_member id
   *
   * @return \Illuminate\Http\RedirectResponse
	 */
  public function update(InstitutionMembersRequest $request, $id) {
    $data = $request->all();

		// Dont update password if left blank on editing
		if (empty($data['senha'])) {
			unset($data['senha']);
		} else {
			$data['senha'] = bcrypt($data['senha']);
		}

		// Update user by id with request data
		$institution_member = MembroInstituicao::find($id)->update($data);

    return redirect()->route('registration.institution_members.index');
  }
}
