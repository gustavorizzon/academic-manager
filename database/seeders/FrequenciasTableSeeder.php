<?php

namespace Database\Seeders;

use App\Models\Frequencia;
use Illuminate\Database\Seeder;

class FrequenciasTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Frequencia::factory(100)->create();
  }
}
