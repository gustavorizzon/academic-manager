<?php

namespace Database\Factories;

use App\Models\Aluno;
use App\Models\Coordenador;
use App\Models\Pessoa;
use App\Models\Professor;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CoordenadorFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Coordenador::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $coordinatorIds = Coordenador::all()->pluck('matricula')->all();
    $professorIds = Professor::all()->pluck('matricula')->all();
    $studentIds = Aluno::all()->pluck('matricula')->all();

    $alreadyTakenIds = array_merge($coordinatorIds, $professorIds, $studentIds);

    $personIds = Pessoa::whereNotIn('matricula', $alreadyTakenIds)
                       ->get()
                       ->pluck('matricula')
                       ->all();

    return [
      'matricula' => $this->faker->unique()->randomElement($personIds),
    ];
  }
}
