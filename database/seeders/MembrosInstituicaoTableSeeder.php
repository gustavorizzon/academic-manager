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
    // Create Admin user
    $this->call(AdminMemberSeeder::class);

    // Create 100 Members using factory
    MembroInstituicao::factory(100)->create();
  }
}
