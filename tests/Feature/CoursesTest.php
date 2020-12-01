<?php

namespace Tests\Feature;

use App\Http\Requests\CoursesRequest;
use App\Models\Curso;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class CoursesTest extends TestCase
{
  protected function setUp(): void {
    parent::setUp();

    DB::beginTransaction();
  }

  protected function tearDown(): void
  {
    parent::tearDown();

    DB::rollBack();
  }

  /**
   * Creaate a course with valida data
   *
   * @return void
   */
  public function testCreateACourseWithValidData()
  {
    $data = [
      'nome' => 'Matemática',
      'descricao' => 'Lorem ipsum dolor sit amet',
      'quantidade_semestres' => 6,
      'valor' => 47326,
      'turno' => 'C',
      'horas_turno' => 4
    ];

    $validator = Validator::make($data, (new CoursesRequest)->rules());
    $this->assertFalse($validator->fails());

    $curso = Curso::create($data);
    $this->assertDatabaseHas('cursos', ['id' => $curso->id]);
  }

  /**
   * Trying to create a course with invalid data
   *
   * @return void
   */
  public function testCreateACourseWithInvalidData()
  {
    $data = [
      'nome' => 'Pt',
      'descricao' => '',
      'quantidade_semestres' => 6,
      'valor' => 47326,
      'turno' => 'H',
      'horas_turno' => 4
    ];

    $validator = Validator::make($data, (new CoursesRequest)->rules());
    $this->assertTrue($validator->fails());
  }
}
