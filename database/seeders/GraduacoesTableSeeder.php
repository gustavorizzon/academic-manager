<?php

namespace Database\Seeders;

use App\Models\Graduacao;
use Illuminate\Database\Seeder;

class GraduacoesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Graduacao::factory(50)->create();
  }
}
