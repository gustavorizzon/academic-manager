<?php

namespace Database\Factories;

use App\Models\MembroInstituicao;
use App\Models\MembroBanca;
use App\Models\Banca;
use App\Models\Frequencia;
use App\Models\FrequenciaMembroBanca;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FrequenciaMembroBancaFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = FrequenciaMembroBanca::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $classId = $this->faker->randomElement(
      Frequencia::groupBy('banca_id')->pluck('banca_id')->toArray()
    );

    $classStudentId = $this->faker->randomElement(
      MembroBanca::where('banca_id', $classId)->pluck('id')->toArray()
    );

    $frequencyId = $this->faker->randomElement(
      Frequencia::where('banca_id', $classId)->pluck('id')->toArray()
    );

    return [
      'presente' => $this->faker->boolean,
      'membro_banca_id' => $classStudentId,
      'frequencia_id' => $frequencyId
    ];
  }
}
