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
        'id' => 1,
        'nome' => 'Acre',
        'uf' => 'AC',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 2,
        'nome' => 'Alagoas',
        'uf' => 'AL',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 3,
        'nome' => 'Amapá',
        'uf' => 'AP',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 4,
        'nome' => 'Amazonas',
        'uf' => 'AM',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 5,
        'nome' => 'Bahia',
        'uf' => 'BA',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 6,
        'nome' => 'Ceará',
        'uf' => 'CE',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 7,
        'nome' => 'Distrito Federal',
        'uf' => 'DF',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 8,
        'nome' => 'Espírito Santo',
        'uf' => 'ES',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 9,
        'nome' => 'Goiás',
        'uf' => 'GO',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 10,
        'nome' => 'Maranhão',
        'uf' => 'MA',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 11,
        'nome' => 'Mato Grosso',
        'uf' => 'MT',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 12,
        'nome' => 'Mato Grosso do Sul',
        'uf' => 'MS',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 13,
        'nome' => 'Minas Gerais',
        'uf' => 'MG',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 14,
        'nome' => 'Pará',
        'uf' => 'PA',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 15,
        'nome' => 'Paraíba',
        'uf' => 'PB',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 16,
        'nome' => 'Paraná',
        'uf' => 'PR',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 17,
        'nome' => 'Pernambuco',
        'uf' => 'PE',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 18,
        'nome' => 'Piauí',
        'uf' => 'PI',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 19,
        'nome' => 'Rio de Janeiro',
        'uf' => 'RJ',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 20,
        'nome' => 'Rio Grande do Norte',
        'uf' => 'RN',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 21,
        'nome' => 'Rio Grande do Sul',
        'uf' => 'RS',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 22,
        'nome' => 'Rondônia',
        'uf' => 'RO',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 23,
        'nome' => 'Roraima',
        'uf' => 'RR',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 24,
        'nome' => 'Santa Catarina',
        'uf' => 'SC',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 25,
        'nome' => 'São Paulo',
        'uf' => 'SP',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 26,
        'nome' => 'Sergipe',
        'uf' => 'SE',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'id' => 27,
        'nome' => 'Tocantins',
        'uf' => 'TO',
        'created_at' => $now,
        'updated_at' => $now
      ],
    ]);
  }
}
