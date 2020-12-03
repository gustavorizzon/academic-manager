<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Http\Requests\HolidaysRequest;
use App\Models\Feriado;
use Illuminate\Http\Request;

class HolidaysController extends Controller
{
  /**
   * Returns the index view of the Holidays
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function index() {
    $holidays = Feriado::orderBy('nome')->paginate(10);

    return view('coordinator.holidays.index', ['holidays' => $holidays]);
  }

  /**
   * Returns the view with a form to register new Holidays
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function create() {
    return view('coordinator.holidays.create');
  }

  /**
   * Create new Holiday using request data
   *
   * @param HolidaysRequest $request Request
   *
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(HolidaysRequest $request) {
    Feriado::create($request->all());

    return redirect()->route('coordinator.holidays.index');
  }

  /**
	 * Destroy a Holiday by given id
	 *
	 * @param mixed $id The holiday id
   *
   * @return array
	 */
  public function destroy($id) {
    try {
			Feriado::find($id)->delete();
			return ['status' => 'success'];
		} catch (\Illuminate\Database\QueryException $qe) {
			return ['status' => 'error', 'message' => $qe->getMessage()];
		} catch (\PDOException $pdoe) {
			return ['status' => 'error', 'message' => $pdoe->getMessage()];
		}
  }

  /**
   * Returns the view with a form to edit a Holiday
   *
   * @param mixed $id The id of the Holiday to be edited
   *
   * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
   */
  public function edit($id) {
    $holiday = Feriado::find($id);

    return view('coordinator.holidays.edit', ['holiday' => $holiday]);
  }

  /**
	 * Updates the Holiday and redirects to index route
	 *
	 * @param HolidaysRequest $request Request
	 * @param mixed $id The holiday id
   *
   * @return \Illuminate\Http\RedirectResponse
	 */
  public function update(HolidaysRequest $request, $id) {
    Feriado::find($id)->update($request->all());

    return redirect()->route('coordinator.holidays.index');
  }
}
