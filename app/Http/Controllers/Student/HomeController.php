<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth', \App\Http\Middleware\Student::class]);
  }

  public function home()
  {
    return view('student.home');
  }
}
