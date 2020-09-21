<?php

namespace Database\Seeders;

use App\Models\AvaliacaoAlunoBanca;
use Illuminate\Database\Seeder;

class AvaliacoesAlunoBancaTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    AvaliacaoAlunoBanca::factory(50)->create();
  }
}
