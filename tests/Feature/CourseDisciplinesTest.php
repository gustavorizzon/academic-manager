<?php

namespace Tests\Feature;

use App\Http\Requests\CourseDisciplinesRequest;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\DisciplinaCurso;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class CourseDisciplinesTest extends TestCase
{
  use WithoutMiddleware;

  protected function setUp(): void
  {
    parent::setUp();

    DB::beginTransaction();
  }

  protected function tearDown(): void
  {
    parent::tearDown();

    DB::rollBack();
  }

  /**
   * Test the ability to add a random discipline to a random course.
   *
   * @return void
   */
  public function testAddARandomDisciplineToARandomCourse()
  {
    $rndCourseId = Curso::all()->random()->id;
    $rndDisciplineId = Disciplina::all()->random()->id;
    $data = [
      'disciplina_id' => $rndDisciplineId,
      'curso_id' => $rndCourseId,
      'obrigatoria' => true
    ];

    $validator = Validator::make($data, (new CourseDisciplinesRequest)->rules());
    $this->assertFalse($validator->fails());

    $courseDiscipline = DisciplinaCurso::create($data);
    $this->assertDatabaseHas('disciplinas_curso', ['id' => $courseDiscipline->id]);
  }

  /**
   * Test the CourseDisciplinesController ability to destroy an item
   *
   * @return void
   */
  public function testRemoveDisciplineFromCourseUsingCourseDisciplinesControllerDestroyRoute() {
    $rndCourseId = Curso::all()->random()->id;
    $rndDisciplineId = Disciplina::all()->random()->id;
    $courseDiscipline = DisciplinaCurso::create([
      'disciplina_id' => $rndDisciplineId,
      'curso_id' => $rndCourseId,
      'obrigatoria' => true
    ]);

    $response = $this->get("/registration/courses/{$rndCourseId}/disciplines/{$courseDiscipline->id}/destroy");
    $response->assertJson(['status' => 'success']);

    $this->assertDatabaseMissing('disciplinas_curso', ['id' => $courseDiscipline->id]);
  }
}
