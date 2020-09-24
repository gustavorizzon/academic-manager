<?php

namespace Database\Seeders;

use App\Models\AvaliacaoMembroBanca;
use Illuminate\Database\Seeder;

class AvaliacoesMembroBancaTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    AvaliacaoMembroBanca::factory(50)->create();
  }
}
