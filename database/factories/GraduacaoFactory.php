<?php

namespace Database\Factories;

use App\Models\Graduacao;
use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GraduacaoFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Graduacao::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'titulo' => $this->faker->jobTitle,
      'numero_titulo' => $this->faker->randomNumber(),

      'pessoa_matricula' => $this->faker->randomElement(
        Pessoa::all()->pluck('matricula')->toArray()
      )
    ];
  }
}
