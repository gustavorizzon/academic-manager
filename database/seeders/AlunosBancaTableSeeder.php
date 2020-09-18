<?php

namespace Database\Seeders;

use App\Models\AlunoBanca;
use Illuminate\Database\Seeder;

class AlunosBancaTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    AlunoBanca::factory(500)->create();
  }
}
