<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
  {
    $this->call(EstadosTableSeeder::class);
    $this->call(CidadesTableSeeder::class);
    $this->call(CursosTableSeeder::class);
    $this->call(DisciplinasTableSeeder::class);
    $this->call(DisciplinasCursoTableSeeder::class);
    $this->call(PessoasTableSeeder::class);
    $this->call(CoordenadoresTableSeeder::class);
    $this->call(ProfessoresTableSeeder::class);
    $this->call(AlunosTableSeeder::class);
    $this->call(BancaTableSeeder::class);
  }
}
