<?php

namespace Database\Seeders;

use App\Models\Estado;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $now = Carbon::now()->toDateTimeString();

    DB::table('estados')->insert([
      [
        'nome' => 'Acre',
        'uf' => 'AC',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Alagoas',
        'uf' => 'AL',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Amapá',
        'uf' => 'AP',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Amazonas',
        'uf' => 'AM',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Bahia',
        'uf' => 'BA',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Ceará',
        'uf' => 'CE',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Distrito Federal',
        'uf' => 'DF',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Espírito Santo',
        'uf' => 'ES',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Goiás',
        'uf' => 'GO',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Maranhão',
        'uf' => 'MA',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Mato Grosso',
        'uf' => 'MT',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Mato Grosso do Sul',
        'uf' => 'MS',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Minas Gerais',
        'uf' => 'MG',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Pará',
        'uf' => 'PA',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Paraíba',
        'uf' => 'PB',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Paraná',
        'uf' => 'PR',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Pernambuco',
        'uf' => 'PE',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Piauí',
        'uf' => 'PI',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Rio de Janeiro',
        'uf' => 'RJ',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Rio Grande do Norte',
        'uf' => 'RN',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Rio Grande do Sul',
        'uf' => 'RS',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Rondônia',
        'uf' => 'RO',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Roraima',
        'uf' => 'RR',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Santa Catarina',
        'uf' => 'SC',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'São Paulo',
        'uf' => 'SP',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Sergipe',
        'uf' => 'SE',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'nome' => 'Tocantins',
        'uf' => 'TO',
        'created_at' => $now,
        'updated_at' => $now
      ],
    ]);
  }
}
