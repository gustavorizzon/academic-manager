<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth', \App\Http\Middleware\Admin::class]);
  }

  public function home()
  {
    return view('admin.home');
  }
}
