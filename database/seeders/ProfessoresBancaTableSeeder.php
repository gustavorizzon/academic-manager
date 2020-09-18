<?php

namespace Database\Seeders;

use App\Models\ProfessorBanca;
use Illuminate\Database\Seeder;

class ProfessoresBancaTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    ProfessorBanca::factory(50)->create();
  }
}
