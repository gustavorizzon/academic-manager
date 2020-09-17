<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Curso::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'nome' => $this->faker->unique()->jobTitle,
      'descricao' => $this->faker->text(),
      'quantidade_semestres' => $this->faker->numberBetween(2, 12),
      'valor' => $this->faker->randomFloat(2, 15000, 500000),
      'turno' => $this->faker->randomElement(['A', 'B', 'C']),
      'horas_turno' => $this->faker->numberBetween(2, 5)
    ];
  }
}
