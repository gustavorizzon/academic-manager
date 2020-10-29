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
   * A basic feature test example.
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
}
