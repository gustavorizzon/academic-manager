<?php

namespace Database\Factories;

use App\Models\Banca;
use App\Models\Professor;
use App\Models\ProfessorBanca;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProfessorBancaFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = ProfessorBanca::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'professor_matricula' => $this->faker->randomElement(
        Professor::all()->pluck('matricula')->all()
      ),

      'banca_id' => $this->faker->unique()->randomElement(
        Banca::all()->pluck('id')->all()
      )
    ];
  }
}
