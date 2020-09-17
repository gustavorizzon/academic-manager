<?php

namespace Database\Factories;

use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DisciplinaFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Disciplina::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'nome' => $this->faker->unique()->word,
      'total_creditos' => $this->faker->numberBetween(15, 30),
      'minimo_creditos_necessarios' => $this->faker->numberBetween(7, 25)
    ];
  }
}
