<?php

namespace Database\Seeders;

use App\Models\Coordenador;
use Illuminate\Database\Seeder;

class CoordenadoresTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Coordenador::factory(10)->create();
  }
}
