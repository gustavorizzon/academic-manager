<?php

namespace Database\Seeders;

use App\Models\Avaliacao;
use Illuminate\Database\Seeder;

class AvaliacoesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Avaliacao::factory(50)->create();
  }
}
