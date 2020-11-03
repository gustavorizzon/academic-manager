<?php

namespace Database\Seeders;

use App\Models\MembroInstituicao;
use Illuminate\Database\Seeder;

class StudentMemberSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    MembroInstituicao::factory()->create([
      'nome' => 'Student',
      'login' => 'student',
      'senha' => bcrypt('student'),
      'tipo_membro' => MembroInstituicao::STUDENT
    ]);
  }
}
