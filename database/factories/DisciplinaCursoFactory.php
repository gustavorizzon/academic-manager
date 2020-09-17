<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\DisciplinaCurso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DisciplinaCursoFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = DisciplinaCurso::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $courseId = Curso::all()->random()->id;
    $alreadyTakenDisciplineIds = DisciplinaCurso::where('curso_id', $courseId)
                                                ->pluck('disciplina_id')
                                                ->all();
    $disciplineId = Disciplina::whereNotIn('id', $alreadyTakenDisciplineIds)
                              ->get()
                              ->random()
                              ->id;

    return [
      'curso_id' => $courseId,
      'disciplina_id' => $disciplineId,
      'obrigatoria' => $this->faker->boolean
    ];
  }
}
