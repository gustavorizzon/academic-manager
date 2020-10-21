<?php

namespace Database\Factories;

use App\Models\Banca;
use App\Models\DisciplinaCurso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BancaFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Banca::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'descricao' => $this->faker->text,
      'periodo_letivo' => $this->faker->year . '/' . $this->faker->numberBetween(1, 2),
      'status' => $this->faker->boolean,
      'total_vagas' => $this->faker->numberBetween(10, 60),
      'sala' => $this->faker->numberBetween(1, 256),

      'disciplina_curso_id' => $this->faker->randomElement(
        DisciplinaCurso::all()->pluck('id')->all()
      )
    ];
  }
}
