<?php

namespace App\Providers;

use App\Models\Banca;
use App\Models\MembroBanca;
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

    Gate::define('manage-disciplines', function ($user) {
      return $user->tipo_membro == MembroInstituicao::COORDINATOR;
    });

    Gate::define('manage-enrollments', function ($user) {
      return $user->tipo_membro == MembroInstituicao::COORDINATOR;
    });

    Gate::define('manage-holidays', function ($user) {
      return $user->tipo_membro == MembroInstituicao::COORDINATOR;
    });

    // Professors gates
    Gate::define('list-professor-boards', function ($user) {
      return $user->tipo_membro == MembroInstituicao::PROFESSOR;
    });

    Gate::define('manage-board-as-professor', function ($user, $board) {
      return $board->hasProfessor($user);
    });

    Gate::define('list-professor-documents', function ($user) {
      return $user->tipo_membro == MembroInstituicao::PROFESSOR;
    });

    Gate::define('download-document', function ($user, $document) {
      return $user->tipo_membro === MembroInstituicao::COORDINATOR
        ||  in_array(
              $document->banca_id,
              $user->getUserBoards()->pluck('banca_id')->toArray()
            );
    });

    Gate::define('generate-boards', function ($user) {
      return $user->tipo_membro == MembroInstituicao::COORDINATOR;
    });

    Gate::define('list-all-boards', function ($user) {
      return $user->tipo_membro == MembroInstituicao::COORDINATOR;
    });

    Gate::define('list-boards-with-pendencies', function ($user) {
      return $user->tipo_membro == MembroInstituicao::COORDINATOR;
    });

    Gate::define('boards-summary-report', function ($user) {
      return $user->tipo_membro == MembroInstituicao::PROFESSOR
          || $user->tipo_membro == MembroInstituicao::COORDINATOR;
    });
  }
}
