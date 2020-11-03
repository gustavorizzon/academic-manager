<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestEnvironmentSeeder extends Seeder
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
    $this->call(CoordinatorMemberSeeder::class);
    $this->call(ProfessorMemberSeeder::class);
    $this->call(StudentMemberSeeder::class);
  }
}
