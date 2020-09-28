<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    if (Auth::guest()) {
      return view('welcome');
    }

    switch (Auth::user()->tipo_membro) {
      case '*': return redirect()->route('admin.home');
      case 'C': return redirect()->route('coordinator.home');
      case 'D': return redirect()->route('professor.home');
      case 'A': return redirect()->route('student.home');
    }

    return redirect()->route('undefined');
  }
}
