<?php

namespace Database\Factories;

use App\Models\Aluno;
use App\Models\AlunoBanca;
use App\Models\Banca;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AlunoBancaFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = AlunoBanca::class;

  /**
  * Define the model's default state.
  *
  * @return array
  */
  public function definition()
  {
    return [
      'aluno_matricula' => $this->faker->randomElement(
        Aluno::all()->pluck('matricula')->toArray()
      ),

      'banca_id' => $this->faker->randomElement(
        Banca::all()->pluck('id')->toArray()
      ),

      'creditos' => $this->faker->numberBetween(0, 30),
      'status' => $this->faker->boolean
    ];
  }
}
