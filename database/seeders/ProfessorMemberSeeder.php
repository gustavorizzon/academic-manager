<?php

namespace Database\Seeders;

use App\Models\MembroInstituicao;
use Illuminate\Database\Seeder;

class ProfessorMemberSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    MembroInstituicao::factory()->create([
      'nome' => 'Professor',
      'login' => 'professor',
      'senha' => bcrypt('professor'),
      'tipo_membro' => MembroInstituicao::PROFESSOR
    ]);
  }
}
