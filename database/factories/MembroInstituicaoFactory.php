<?php

namespace Database\Factories;

use App\Models\Cidade;
use App\Models\MembroInstituicao;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MembroInstituicaoFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = MembroInstituicao::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $lastName = $this->faker->unique()->lastName;

    return [
      'nome' => $this->faker->unique()->firstName . ' ' . $lastName,
      'data_nascimento' => $this->faker->dateTimeBetween('-40 years', '-18 years'),
      'orientacao_sexual' => $this->faker->randomElement(['M', 'F', 'O']),
      'estado_civil' => $this->faker->randomElement(['S', 'C', 'D']),
      'cpf' => $this->faker->unique()->numerify('###.###.###-##'),
      'rg' => $this->faker->unique()->numerify('##########'),
      'nome_mae' => $this->faker->unique()->firstNameFemale . ' ' . $lastName,
      'nome_pai' => $this->faker->unique()->firstNameMale . ' ' . $lastName,
      'telefone' => $this->faker->phoneNumber,
      'email' => $this->faker->unique()->email,
      'rua' => $this->faker->streetAddress,
      'numero_rua' => $this->faker->buildingNumber,
      'complemento' => $this->faker->secondaryAddress,
      'referencia' => $this->faker->word,
      'bairro' => $this->faker->streetName,
      'cidade_id' => Cidade::all()->random()->id,
      'login' => $this->faker->userName,
      'senha' => bcrypt('senha'),
      'tipo_membro' => $this->faker->randomElement(['A', 'C', 'D'])
    ];
  }
}
