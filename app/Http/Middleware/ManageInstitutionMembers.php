<?php

namespace App\Http\Middleware;

use App\Models\MembroInstituicao;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageInstitutionMembers
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
    $authUser = Auth::user();

    if (
         $authUser->tipo_membro == MembroInstituicao::ADMIN
      || $authUser->tipo_membro == MembroInstituicao::COORDINATOR
    ) {
      return $next($request);
    }

    return redirect('/');
  }
}
