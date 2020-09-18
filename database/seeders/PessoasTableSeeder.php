<?php

namespace Database\Seeders;

use App\Models\Pessoa;
use Illuminate\Database\Seeder;

class PessoasTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Pessoa::factory(100)->create();
  }
}
