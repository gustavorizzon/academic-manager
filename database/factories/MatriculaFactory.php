<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Matricula;
use App\Models\MembroInstituicao;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MatriculaFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Matricula::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $alreadyTakenStudentIds = Matricula::all()->pluck('id');
    $notTakenStudentId = MembroInstituicao::where('tipo_membro', 'A')
                                          ->whereNotIn('id', $alreadyTakenStudentIds)
                                          ->get()
                                          ->random()
                                          ->id;

    return [
      'curso_id' => Curso::all()->random()->id,
      'membro_instituicao_id' => $notTakenStudentId,
      'status' => $this->faker->randomElement(['M', 'T', 'C'])
    ];
  }
}
