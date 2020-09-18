<?php

namespace Database\Seeders;

use App\Models\FrequenciaAlunoBanca;
use Illuminate\Database\Seeder;

class FrequenciasAlunoBancaTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    FrequenciaAlunoBanca::factory(100)->create();
  }
}
