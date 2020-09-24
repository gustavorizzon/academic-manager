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
    $this->call(MembrosInstituicaoTableSeeder::class);
    $this->call(BancasTableSeeder::class);
    $this->call(MembrosBancaTableSeeder::class);
    $this->call(FrequenciasTableSeeder::class);
    $this->call(FrequenciasMembroBancaTableSeeder::class);
    $this->call(AvaliacoesTableSeeder::class);
    $this->call(AvaliacoesMembroBancaTableSeeder::class);
    $this->call(GraduacoesTableSeeder::class);
  }
}
