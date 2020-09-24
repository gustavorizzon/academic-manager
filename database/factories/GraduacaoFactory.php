<?php

namespace Database\Factories;

use App\Models\Graduacao;
use App\Models\MembroInstituicao;
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

      'membro_instituicao_id' => $this->faker->randomElement(
        MembroInstituicao::all()->pluck('id')->toArray()
      )
    ];
  }
}
