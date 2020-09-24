<?php

namespace Database\Seeders;

use App\Models\MembroBanca;
use Illuminate\Database\Seeder;

class MembrosBancaTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    MembroBanca::factory(500)->create();
  }
}
