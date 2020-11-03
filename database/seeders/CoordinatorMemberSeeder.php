<?php

namespace Database\Seeders;

use App\Models\MembroInstituicao;
use Illuminate\Database\Seeder;

class CoordinatorMemberSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    MembroInstituicao::factory()->create([
      'nome' => 'Coordinator',
      'login' => 'coordinator',
      'senha' => bcrypt('coordinator'),
      'tipo_membro' => MembroInstituicao::COORDINATOR
    ]);
  }
}
