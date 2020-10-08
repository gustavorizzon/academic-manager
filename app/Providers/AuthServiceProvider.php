<?php

namespace App\Providers;

use App\Models\MembroInstituicao;
use App\Policies\MembroInstituicaoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
  /**
   * The policy mappings for the application.
   *
   * @var array
   */
  protected $policies = [
    // 'App\Model' => 'App\Policies\ModelPolicy',
  ];

  /**
   * Register any authentication / authorization services.
   *
   * @return void
   */
  public function boot()
  {
    $this->registerPolicies();

    Gate::define('manage-states', function ($user) {
      return $user->tipo_membro == MembroInstituicao::ADMIN;
    });

    Gate::define('manage-cities', function ($user) {
      return $user->tipo_membro == MembroInstituicao::ADMIN;
    });

    Gate::define('manage-institution-members', function ($user) {
      return (
        $user->tipo_membro == MembroInstituicao::ADMIN
        || $user->tipo_membro == MembroInstituicao::COORDINATOR
      );
    });

    Gate::define('manage-graduations', function ($user) {
      return (
        $user->tipo_membro == MembroInstituicao::ADMIN
        || $user->tipo_membro == MembroInstituicao::COORDINATOR
      );
    });

    Gate::define('manage-courses', function ($user) {
      return $user->tipo_membro == MembroInstituicao::COORDINATOR;
    });
  }
}
