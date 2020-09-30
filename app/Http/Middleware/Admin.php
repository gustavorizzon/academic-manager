<?php

namespace App\Http\Middleware;

use App\Models\MembroInstituicao;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle(Request $request, Closure $next)
  {
    if (Auth::user()->tipo_membro == MembroInstituicao::ADMIN) {
      return $next($request);
    }

    return redirect('/');
  }
}
