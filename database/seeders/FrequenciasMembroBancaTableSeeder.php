<?php

namespace Database\Seeders;

use App\Models\FrequenciaMembroBanca;
use Illuminate\Database\Seeder;

class FrequenciasMembroBancaTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    FrequenciaMembroBanca::factory(100)->create();
  }
}
