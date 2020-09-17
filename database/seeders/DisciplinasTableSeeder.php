<?php

namespace Database\Seeders;

use App\Models\Disciplina;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisciplinasTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Disciplina::factory(50)->create();
  }
}
