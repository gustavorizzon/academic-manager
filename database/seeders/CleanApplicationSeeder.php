<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CleanApplicationSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->call(EstadosTableSeeder::class);
    $this->call(CidadesTableSeeder::class);
    $this->call(AdminMemberSeeder::class);
  }
}
