<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\DisciplinaCurso;
use App\Models\Feriado;
use App\Models\Matricula;
use App\Models\MembroInstituicao;
use Illuminate\Database\Seeder;

class CleanApplicationWithTestDataSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // A clean application (states, cities and admin/coordinator/professor/student user)
    $this->call(CleanApplicationSeeder::class);
    $this->call(CoordinatorMemberSeeder::class);
    $this->call(ProfessorMemberSeeder::class);
    $this->call(StudentMemberSeeder::class);

    // Some courses
    Curso::factory(5)->create();
    $ads = Curso::factory()->create([ 'nome' => 'Análise e Desenvolvimento de Sistemas' ]);
    $cc = Curso::factory()->create([ 'nome' => 'Ciência da Computação' ]);
    $direito = Curso::factory()->create([ 'nome' => 'Direito' ]);

    // Some disciplines
    $matematicaBasica = Disciplina::factory()->create([ 'nome' => 'Matemática Básica' ]);
    $matematicaEspacial = Disciplina::factory()->create([ 'nome' => 'Matemática Espacial' ]);
    $legislacao = Disciplina::factory()->create([ 'nome' => 'Leis e a Legislação' ]);
    $algoritmos = Disciplina::factory()->create([ 'nome' => 'Algoritmos' ]);
    $devWeb = Disciplina::factory()->create([ 'nome' => 'Desenvolvimento Web' ]);
    $devMobile = Disciplina::factory()->create([ 'nome' => 'Desenvolvimento Mobile' ]);
    $devDesktop = Disciplina::factory()->create([ 'nome' => 'Desenvolvimento Desktop' ]);
    $pi1 = Disciplina::factory()->create([ 'nome' => 'Projeto Integrador I' ]);
    $pi2 = Disciplina::factory()->create([ 'nome' => 'Projeto Integrador II' ]);
    $tcc = Disciplina::factory()->create([ 'nome' => 'TCC' ]);
    $etica = Disciplina::factory()->create([ 'nome' => 'Ética' ]);
    $leisTrabalhistas = Disciplina::factory()->create([ 'nome' => 'Leis Trabalhistas' ]);
    $legModerna = Disciplina::factory()->create([ 'nome' => 'Legislação Moderna' ]);
    $testes = Disciplina::factory()->create([ 'nome' => 'Teste de Software' ]);

    // Disciplines in course
    // ads
    DisciplinaCurso::factory()->create(['curso_id' => $ads->id, 'disciplina_id' => $devWeb->id,]);
    DisciplinaCurso::factory()->create(['curso_id' => $ads->id, 'disciplina_id' => $devMobile->id,]);
    DisciplinaCurso::factory()->create(['curso_id' => $ads->id, 'disciplina_id' => $devDesktop->id,]);
    DisciplinaCurso::factory()->create(['curso_id' => $ads->id, 'disciplina_id' => $pi1->id,]);

    // cc
    DisciplinaCurso::factory()->create(['curso_id' => $cc->id, 'disciplina_id' => $algoritmos->id,]);
    DisciplinaCurso::factory()->create(['curso_id' => $cc->id, 'disciplina_id' => $etica->id,]);
    DisciplinaCurso::factory()->create(['curso_id' => $cc->id, 'disciplina_id' => $matematicaBasica->id,]);
    DisciplinaCurso::factory()->create(['curso_id' => $cc->id, 'disciplina_id' => $pi1->id,]);

    // direito
    DisciplinaCurso::factory()->create(['curso_id' => $direito->id, 'disciplina_id' => $leisTrabalhistas->id,]);
    DisciplinaCurso::factory()->create(['curso_id' => $direito->id, 'disciplina_id' => $legislacao->id,]);
    DisciplinaCurso::factory()->create(['curso_id' => $direito->id, 'disciplina_id' => $legModerna->id,]);
    DisciplinaCurso::factory()->create(['curso_id' => $direito->id, 'disciplina_id' => $tcc->id,]);

    // Holidays
    Feriado::create([ 'data' => '2020-12-25', 'nome' => 'Natal' ]);
    Feriado::create([ 'data' => '2020-12-31', 'nome' => 'Véspera de Ano Novo' ]);
    Feriado::create([ 'data' => '2021-01-01', 'nome' => 'Dia mundial da Paz (Ano Novo)' ]);
    Feriado::create([ 'data' => '2021-02-20', 'nome' => 'Carnaval' ]);
    Feriado::create([ 'data' => '2021-04-01', 'nome' => 'Dia da Mentira' ]);

    // Professors
    MembroInstituicao::factory(16)->create([
      'tipo_membro' => MembroInstituicao::PROFESSOR
    ]);

    // Students
    MembroInstituicao::factory(31)->create([
      'tipo_membro' => MembroInstituicao::STUDENT
    ]);

    // Enrollments
    Matricula::factory(10)->create([
      'status' => Matricula::ENROLLED
    ]);
  }
}
