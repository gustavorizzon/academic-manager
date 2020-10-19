<?php

namespace Database\Seeders;

use App\Models\Cidade;
use App\Models\MembroInstituicao;
use Carbon\Carbon;
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
    MembroInstituicao::create([
      'nome' => 'Admin',
      'data_nascimento' => Carbon::now()->toDateTimeString(),
      'orientacao_sexual' => 'O',
      'estado_civil' => 'S',
      'cpf' => '000.000.000-00',
      'rg' => '0000000000',
      'nome_mae' => 'Mother Admin',
      'nome_pai' => 'Father Admin',
      'telefone' => '(54) 12345-6789',
      'email' => 'admin@example.com',
      'rua' => 'System Home',
      'numero_rua' => 0,
      'complemento' => 'Inside',
      'referencia' => 'System',
      'bairro' => 'Users',
      'cidade_id' => Cidade::all()->random()->id,
      'login' => 'admin',
      'senha' => bcrypt('admin'),
      'tipo_membro' => '*'
    ]);

    // Create 100 Members using factory
    MembroInstituicao::factory(100)->create();
  }
}
