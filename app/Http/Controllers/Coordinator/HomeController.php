<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth', \App\Http\Middleware\Coordinator::class]);
  }

  public function home()
  {
    return view('coordinator.home');
  }
}
