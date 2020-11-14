<?php

namespace Database\Factories;

use App\Models\Banca;
use App\Models\Frequencia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FrequenciaFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Frequencia::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'data' => $this->faker->date(),
      'banca_id' => $this->faker->randomElement(
        Banca::all()->pluck('id')->toArray()
      ),
      'resumo_aula' => $this->faker->text()
    ];
  }
}
