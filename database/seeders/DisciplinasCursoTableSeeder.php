<?php

namespace Database\Seeders;

use App\Models\DisciplinaCurso;
use Illuminate\Database\Seeder;

class DisciplinasCursoTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DisciplinaCurso::factory(50)->create();
  }
}
