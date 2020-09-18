<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Aluno::factory(70)->create();
  }
}
