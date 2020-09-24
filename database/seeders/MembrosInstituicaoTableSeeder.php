<?php

namespace Database\Seeders;

use App\Models\MembroInstituicao;
use Illuminate\Database\Seeder;

class MembrosInstituicaoTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    MembroInstituicao::factory(100)->create();
  }
}
