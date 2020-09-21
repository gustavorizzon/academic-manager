<?php

namespace Database\Factories;

use App\Models\AlunoBanca;
use App\Models\Avaliacao;
use App\Models\AvaliacaoAlunoBanca;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AvaliacaoAlunoBancaFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = AvaliacaoAlunoBanca::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $classId = $this->faker->randomElement(
      Avaliacao::groupBy('banca_id')->pluck('banca_id')->toArray()
    );

    $classStudentId = $this->faker->randomElement(
      AlunoBanca::where('banca_id', $classId)->pluck('id')->toArray()
    );

    $testId = $this->faker->randomElement(
      Avaliacao::where('banca_id', $classId)->pluck('id')->toArray()
    );

    return [
      'nota' => $this->faker->randomFloat(1, 0, 10),
      'aluno_banca_id' => $classStudentId,
      'avaliacao_id' => $testId
    ];
  }
}
