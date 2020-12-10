<?php

namespace Database\Factories;

use App\Models\Avaliacao;
use App\Models\Banca;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AvaliacaoFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Avaliacao::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'conteudo' => $this->faker->sentence(),
      'peso' => $this->faker->randomFloat(2, 3, 5),
      'data' => $this->faker->date(),
      'tipo' => $this->faker->randomElement([
        Avaliacao::TYPE_TEST,
        Avaliacao::TYPE_WORK,
        Avaliacao::TYPE_EXAM
      ]),

      'banca_id' => $this->faker->randomElement(
        Banca::all()->pluck('id')->toArray()
      )
    ];
  }
}
