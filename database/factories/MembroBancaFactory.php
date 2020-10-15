<?php

namespace Database\Factories;

use App\Models\MembroInstituicao;
use App\Models\MembroBanca;
use App\Models\Banca;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MembroBancaFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = MembroBanca::class;

  /**
  * Define the model's default state.
  *
  * @return array
  */
  public function definition()
  {
    return [
      'membro_instituicao_id' => $this->faker->randomElement(
        MembroInstituicao::all()->pluck('id')->toArray()
      ),

      'banca_id' => $this->faker->randomElement(
        Banca::all()->pluck('id')->toArray()
      ),

      'creditos' => $this->faker->numberBetween(0, 30),
      'status' => $this->faker->randomElement([
        MembroBanca::STATUS_ENROLLED,
        MembroBanca::STATUS_APPROVED,
        MembroBanca::STATUS_DISAPPROVED,
        MembroBanca::STATUS_EXAM,
      ])
    ];
  }
}
