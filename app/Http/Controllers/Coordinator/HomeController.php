<?php

namespace App\Http\Controllers\Coordinator;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\MembroInstituicao;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home() {
    return view('coordinator.home', [
      'institutionMembersCount' => $this->getInstitutionMembersCount(),
      'coursesCount' => $this->getCoursesCount(),
      'professorsCount' => $this->getProfessorsCount(),
      'graduatedStudentsCount' => $this->getGraduatedStudentsCount()
    ]);
  }

  /**
   * Returns the Institution Members Count
   *
   * @return int
   */
  private function getInstitutionMembersCount() {
    return MembroInstituicao::count();
  }

  /**
   * Returns the Courses Count
   *
   * @return int
   */
  private function getCoursesCount() {
    return Curso::count();
  }

  /**
   * Returns the Professors Count
   *
   * @return int
   */
  private function getProfessorsCount() {
    return MembroInstituicao::where('tipo_membro', MembroInstituicao::PROFESSOR)->count();
  }

  /**
   * Return the graduated students count
   */
  private function getGraduatedStudentsCount() {
    return MembroInstituicao::join('graduacoes as g', 'g.membro_instituicao_id', '=', 'membros_instituicao.id')
        ->where('membros_instituicao.tipo_membro', MembroInstituicao::STUDENT)
      ->groupBy('membros_instituicao.id')
    ->get('membros_instituicao.id')
    ->count();
  }
}
