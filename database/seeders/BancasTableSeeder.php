<?php

namespace Database\Seeders;

use App\Models\Banca;
use Illuminate\Database\Seeder;

class BancasTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Banca::factory(50)->create();
  }
}
