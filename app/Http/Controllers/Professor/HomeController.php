<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth', \App\Http\Middleware\Professor::class]);
  }

  public function home()
  {
    return view('professor.home');
  }
}
