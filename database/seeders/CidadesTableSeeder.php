<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $now = Carbon::now()->toDateTimeString();

    DB::table('cidades')->insert([
      [
        'estado_id' => 1,
        'nome' => 'Acrelândia',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Assis Brasil',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Brasiléia',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Bujari',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Capixaba',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Cruzeiro do Sul',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Epitaciolândia',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Feijó',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Jordão',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Mâncio Lima',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Manoel Urbano',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Marechal Thaumaturgo',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Plácido de Castro',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Porto Acre',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Porto Walter',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Rio Branco',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Rodrigues Alves',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Santa Rosa do Purus',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Sena Madureira',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Senador Guiomard',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Tarauacá',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 1,
        'nome' => 'Xapuri',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Água Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Anadia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Arapiraca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Atalaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Barra de Santo Antônio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Barra de São Miguel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Batalha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Belém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Belo Monte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Boca da Mata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Branquinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Cacimbinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Cajueiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Campestre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Campo Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Campo Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Canapi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Capela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Carneiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Chã Preta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Coité do Nóia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Colônia Leopoldina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Coqueiro Seco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Coruripe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Craíbas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Delmiro Gouveia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Dois Riachos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Estrela de Alagoas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Feira Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Feliz Deserto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Flexeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Girau do Ponciano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Ibateguara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Igaci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Igreja Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Inhapi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Jacaré dos Homens",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Jacuípe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Japaratinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Jaramataia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Jequiá da Praia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Joaquim Gomes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Jundiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Junqueiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Lagoa da Canoa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Limoeiro de Anadia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Maceió",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Major Isidoro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Mar Vermelho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Maragogi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Maravilha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Marechal Deodoro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Maribondo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Mata Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Matriz de Camaragibe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Messias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Minador do Negrão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Monteirópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Murici",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Novo Lino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Olho d'Água das Flores",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Olho d'Água do Casado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Olho d'Água Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Olivença",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Ouro Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Palestina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Palmeira dos Índios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Pão de Açúcar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Pariconha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Paripueira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Passo de Camaragibe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Paulo Jacinto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Penedo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Piaçabuçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Pilar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Pindoba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Piranhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Poço das Trincheiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Porto Calvo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Porto de Pedras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Porto Real do Colégio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Quebrangulo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Rio Largo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Roteiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Santa Luzia do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Santana do Ipanema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Santana do Mundaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "São Brás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "São José da Laje",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "São José da Tapera",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "São Luís do Quitunde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "São Miguel dos Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "São Miguel dos Milagres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "São Sebastião",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Satuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Senador Rui Palmeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Tanque d'Arca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Taquarana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Teotônio Vilela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Traipu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "União dos Palmares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 2,
        'nome' => "Viçosa",
        'created_at' => $now,
        'updated_at' => $now
      ],

      [
        'estado_id' => 3,
        'nome' => "Amapá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Calçoene",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Cutias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Ferreira Gomes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Itaubal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Laranjal do Jari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Macapá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Mazagão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Oiapoque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Pedra Branca do Amapari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Porto Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Pracuúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Santana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Serra do Navio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Tartarugalzinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 3,
        'nome' => "Vitória do Jari",
        'created_at' => $now,
        'updated_at' => $now
      ],

      [
        'estado_id' => 4,
        'nome' => "Alvarães",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Amaturá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Anamã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Anori",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Apuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Atalaia do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Autazes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Barcelos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Barreirinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Benjamin Constant",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Beruri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Boa Vista do Ramos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Boca do Acre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Borba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Caapiranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Canutama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Carauari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Careiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Careiro da Várzea",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Coari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Codajás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Eirunepé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Envira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Fonte Boa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Guajará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Humaitá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Ipixuna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Iranduba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Itacoatiara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Itamarati",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Itapiranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Japurá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Juruá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Jutaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Lábrea",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Manacapuru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Manaquiri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Manaus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Manicoré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Maraã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Maués",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Nhamundá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Nova Olinda do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Novo Airão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Novo Aripuanã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Parintins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Pauini",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Presidente Figueiredo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Rio Preto da Eva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Santa Isabel do Rio Negro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Santo Antônio do Içá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "São Gabriel da Cachoeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "São Paulo de Olivença",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "São Sebastião do Uatumã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Silves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Tabatinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Tapauá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Tefé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Tonantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Uarini",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Urucará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 4,
        'nome' => "Urucurituba",
        'created_at' => $now,
        'updated_at' => $now
      ],

      [
        'estado_id' => 5,
        'nome' => "Abaíra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Abaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Acajutiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Adustina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Água Fria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Aiquara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Alagoinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Alcobaça",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Almadina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Amargosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Amélia Rodrigues",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "América Dourada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Anagé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Andaraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Andorinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Angical",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Anguera",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Antas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Antônio Cardoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Antônio Gonçalves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Aporá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Apuarema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Araças",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Aracatu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Araci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Aramari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Arataca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Aratuípe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Aurelino Leal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Baianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Baixa Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Banzaê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Barra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Barra da Estiva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Barra do Choça",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Barra do Mendes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Barra do Rocha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Barreiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Barro Alto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Barro Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Barrocas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Belmonte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Belo Campo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Biritinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Boa Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Boa Vista do Tupim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Bom Jesus da Lapa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Bom Jesus da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Boninal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Bonito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Boquira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Botuporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Brejões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Brejolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Brotas de Macaúbas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Brumado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Buerarema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Buritirama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Caatiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cabaceiras do Paraguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cachoeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Caculé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Caém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Caetanos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Caetité",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cafarnaum",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cairu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Caldeirão Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Camacan",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Camaçari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Camamu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Campo Alegre de Lourdes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Campo Formoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Canápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Canarana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Canavieiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Candeal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Candeias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Candiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cândido Sales",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cansanção",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Canudos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Capela do Alto Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Capim Grosso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Caraíbas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Caravelas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cardeal da Silva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Carinhanha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Casa Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Castro Alves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Catolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Catu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Caturama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Central",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Chorrochó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cícero Dantas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cipó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Coaraci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cocos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Conceição da Feira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Conceição do Almeida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Conceição do Coité",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Conceição do Jacuípe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Conde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Condeúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Contendas do Sincorá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Coração de Maria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cordeiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Coribe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Coronel João Sá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Correntina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cotegipe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cravolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Crisópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cristópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Cruz das Almas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Curaçá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Dário Meira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Dias d'Ávila",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Dom Basílio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Dom Macedo Costa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Elísio Medrado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Encruzilhada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Entre Rios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Érico Cardoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Esplanada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Euclides da Cunha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Eunápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Fátima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Feira da Mata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Feira de Santana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Filadélfia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Firmino Alves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Floresta Azul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Formosa do Rio Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Gandu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Gavião",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Gentio do Ouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Glória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Gongogi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Governador Mangabeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Guajeru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Guanambi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Guaratinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Heliópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Iaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibiassucê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibicaraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibicoara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibicuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibipeba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibipitanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibiquera",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibirapitanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibirapuã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibirataia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibitiara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibititá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ibotirama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ichu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Igaporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Igrapiúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Iguaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ilhéus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Inhambupe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ipecaetá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ipiaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ipirá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ipupiara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Irajuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Iramaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Iraquara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Irará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Irecê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itabela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itaberaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itabuna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itacaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itaeté",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itagi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itagibá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itagimirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itaguaçu da Bahia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itaju do Colônia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itajuípe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itamaraju",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itamari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itambé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itanagra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itanhém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itaparica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itapé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itapebi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itapetinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itapicuru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itapitanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itaquara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itarantim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itatim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itiruçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itiúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Itororó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ituaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ituberá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Iuiú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jaborandi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jacaraci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jacobina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jaguaquara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jaguarari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jaguaripe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jandaíra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jequié",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jeremoabo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jiquiriçá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jitaúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "João Dourado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Juazeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jucuruçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jussara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jussari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Jussiape",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Lafaiete Coutinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Lagoa Real",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Laje",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Lajedão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Lajedinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Lajedo do Tabocal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Lamarão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Lapão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Lauro de Freitas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Lençóis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Licínio de Almeida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Livramento de Nossa Senhora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Luís Eduardo Magalhães",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Macajuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Macarani",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Macaúbas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Macururé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Madre de Deus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Maetinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Maiquinique",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mairi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Malhada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Malhada de Pedras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Manoel Vitorino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mansidão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Maracás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Maragogipe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Maraú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Marcionílio Souza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mascote",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mata de São João",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Matina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Medeiros Neto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Miguel Calmon",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Milagres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mirangaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mirante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Monte Santo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Morpará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Morro do Chapéu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mortugaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mucugê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mucuri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mulungu do Morro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mundo Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Muniz Ferreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Muquém de São Francisco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Muritiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Mutuípe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Nazaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Nilo Peçanha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Nordestina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Nova Canaã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Nova Fátima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Nova Ibiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Nova Itarana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Nova Redenção",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Nova Soure",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Nova Viçosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Novo Horizonte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Novo Triunfo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Olindina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Oliveira dos Brejinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ouriçangas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ourolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Palmas de Monte Alto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Palmeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Paramirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Paratinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Paripiranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Pau Brasil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Paulo Afonso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Pé de Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Pedrão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Pedro Alexandre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Piatã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Pilão Arcado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Pindaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Pindobaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Pintadas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Piraí do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Piripá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Piritiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Planaltino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Planalto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Poções",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Pojuca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ponto Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Porto Seguro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Potiraguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Prado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Presidente Dutra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Presidente Jânio Quadros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Presidente Tancredo Neves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Queimadas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Quijingue",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Quixabeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Rafael Jambeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Remanso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Retirolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Riachão das Neves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Riachão do Jacuípe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Riacho de Santana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ribeira do Amparo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ribeira do Pombal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ribeirão do Largo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Rio de Contas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Rio do Antônio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Rio do Pires",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Rio Real",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Rodelas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ruy Barbosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Salinas da Margarida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Salvador",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santa Bárbara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santa Brígida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santa Cruz Cabrália",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santa Cruz da Vitória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santa Inês",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santa Luzia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santa Maria da Vitória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santa Rita de Cássia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santa Teresinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santaluz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santanópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santo Amaro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santo Antônio de Jesus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Santo Estêvão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São Desidério",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São Domingos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São Felipe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São Félix",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São Félix do Coribe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São Francisco do Conde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São Gabriel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São Gonçalo dos Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São José da Vitória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São José do Jacuípe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São Miguel das Matas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "São Sebastião do Passé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Sapeaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Sátiro Dias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Saubara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Saúde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Seabra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Sebastião Laranjeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Senhor do Bonfim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Sento Sé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Serra do Ramalho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Serra Dourada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Serra Preta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Serrinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Serrolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Simões Filho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Sítio do Mato",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Sítio do Quinto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Sobradinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Souto Soares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Tabocas do Brejo Velho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Tanhaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Tanque Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Tanquinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Taperoá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Tapiramutá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Teixeira de Freitas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Teodoro Sampaio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Teofilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Teolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Terra Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Tremedal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Tucano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Uauá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ubaíra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ubaitaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Ubatã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Uibaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Umburanas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Una",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Urandi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Uruçuca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Utinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Valença",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Valente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Várzea da Roça",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Várzea do Poço",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Várzea Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Varzedo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Vera Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Vereda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Vitória da Conquista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Wagner",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Wanderley",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Wenceslau Guimarães",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 5,
        'nome' => "Xique-Xique",
        'created_at' => $now,
        'updated_at' => $now
      ],

      [
        'estado_id' => 6,
        'nome' => "Abaiara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Acarape",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Acaraú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Acopiara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Aiuaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Alcântaras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Altaneira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Alto Santo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Amontada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Antonina do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Apuiarés",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Aquiraz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Aracati",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Aracoiaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Ararendá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Araripe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Aratuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Arneiroz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Assaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Aurora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Baixio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Banabuiú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Barbalha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Barreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Barro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Barroquinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Baturité",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Beberibe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Bela Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Boa Viagem",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Brejo Santo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Camocim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Campos Sales",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Canindé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Capistrano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Caridade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Cariré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Caririaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Cariús",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Carnaubal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Cascavel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Catarina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Catunda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Caucaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Cedro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Chaval",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Choró",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Chorozinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Coreaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Crateús",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Crato",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Croatá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Deputado Irapuan Pinheiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Ererê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Eusébio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Farias Brito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Forquilha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Fortaleza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Fortim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Frecheirinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "General Sampaio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Graça",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Granja",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Granjeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Groaíras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Guaiúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Guaraciaba do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Guaramiranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Hidrolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Horizonte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Ibaretama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Ibiapina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Ibicuitinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Icapuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Icó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Iguatu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Independência",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Ipaporanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Ipaumirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Ipu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Ipueiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Iracema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Irauçuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Itaiçaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Itaitinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Itapagé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Itapipoca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Itapiúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Itarema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Itatira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Jaguaretama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Jaguaribara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Jaguaribe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Jaguaruana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Jardim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Jati",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Jijoca de Jericoacoara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Juazeiro do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Jucás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Lavras da Mangabeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Limoeiro do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Madalena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Maracanaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Maranguape",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Marco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Martinópole",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Massapê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Mauriti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Meruoca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Milagres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Milhã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Miraíma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Missão Velha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Mombaça",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Monsenhor Tabosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Morada Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Moraújo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Morrinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Mucambo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Mulungu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Nova Olinda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Nova Russas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Novo Oriente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Ocara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Orós",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Pacajus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Pacatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Pacoti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Pacujá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Palhano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Palmácia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Paracuru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Paraipaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Parambu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Paramoti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Pedra Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Penaforte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Pentecoste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Pereiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Pindoretama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Piquet Carneiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Pires Ferreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Poranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Porteiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Potengi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Potiretama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Quiterianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Quixadá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Quixelô",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Quixeramobim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Quixeré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Redenção",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Reriutaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Russas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Saboeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Salitre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Santa Quitéria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Santana do Acaraú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Santana do Cariri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "São Benedito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "São Gonçalo do Amarante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "São João do Jaguaribe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "São Luís do Curu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Senador Pompeu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Senador Sá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Sobral",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Solonópole",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Tabuleiro do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Tamboril",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Tarrafas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Tauá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Tejuçuoca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Tianguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Trairi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Tururu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Ubajara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Umari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Umirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Uruburetama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Uruoca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Varjota",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Várzea Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 6,
        'nome' => "Viçosa do Ceará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 7,
        'nome' => 'Brasília',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Afonso Cláudio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Água Doce do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Águia Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Alfredo Chaves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Alto Rio Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Anchieta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Apiacá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Aracruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Atilio Vivacqua",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Baixo Guandu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Barra de São Francisco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Boa Esperança",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Bom Jesus do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Brejetuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Cachoeiro de Itapemirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Cariacica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Castelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Colatina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Conceição da Barra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Conceição do Castelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Divino de São Lourenço",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Domingos Martins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Dores do Rio Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Ecoporanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Fundão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Governador Lindenberg",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Guaçuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Guarapari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Ibatiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Ibiraçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Ibitirama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Iconha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Irupi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Itaguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Itapemirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Itarana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Iúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Jaguaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Jerônimo Monteiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "João Neiva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Laranja da Terra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Linhares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Mantenópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Marataízes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Marechal Floriano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Marilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Mimoso do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Montanha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Mucurici",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Muniz Freire",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Muqui",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Nova Venécia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Pancas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Pedro Canário",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Pinheiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Piúma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Ponto Belo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Presidente Kennedy",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Rio Bananal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Rio Novo do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Santa Leopoldina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Santa Maria de Jetibá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Santa Teresa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "São Domingos do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "São Gabriel da Palha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "São José do Calçado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "São Mateus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "São Roque do Canaã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Sooretama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Vargem Alta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Venda Nova do Imigrante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Viana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Vila Pavão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Vila Valério",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Vila Velha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 8,
        'nome' => "Vitória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Abadia de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Abadiânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Acreúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Adelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Água Fria de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Água Limpa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Águas Lindas de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Alexânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Aloândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Alto Horizonte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Alto Paraíso de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Alvorada do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Amaralina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Americano do Brasil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Amorinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Anápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Anhanguera",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Anicuns",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Aparecida de Goiânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Aparecida do Rio Doce",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Aporé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Araçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Aragarças",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Aragoiânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Araguapaz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Arenópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Aruanã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Aurilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Avelinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Baliza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Barro Alto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Bela Vista de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Bom Jardim de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Bom Jesus de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Bonfinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Bonópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Brazabrantes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Britânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Buriti Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Buriti de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Buritinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cabeceiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cachoeira Alta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cachoeira de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cachoeira Dourada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Caçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Caiapônia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Caldas Novas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Caldazinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Campestre de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Campinaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Campinorte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Campo Alegre de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Campo Limpo de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Campos Belos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Campos Verdes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Carmo do Rio Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Castelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Catalão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Caturaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cavalcante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Ceres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cezarina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Chapadão do Céu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cidade Ocidental",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cocalzinho de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Colinas do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Córrego do Ouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Corumbá de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Corumbaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cristalina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cristianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Crixás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cromínia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Cumari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Damianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Damolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Davinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Diorama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Divinópolis de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Doverlândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Edealina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Edéia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Estrela do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Faina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Fazenda Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Firminópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Flores de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Formosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Formoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Gameleira de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Goianápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Goiandira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Goianésia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Goiânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Goianira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Goiatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Gouvelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Guapó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Guaraíta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Guarani de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Guarinos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Heitoraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Hidrolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Hidrolina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Iaciara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Inaciolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Indiara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Inhumas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Ipameri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Ipiranga de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Iporá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Israelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Itaberaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Itaguari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Itaguaru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Itajá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Itapaci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Itapirapuã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Itapuranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Itarumã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Itauçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Itumbiara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Ivolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Jandaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Jaraguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Jataí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Jaupaci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Jesúpolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Joviânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Jussara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Lagoa Santa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Leopoldo de Bulhões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Luziânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Mairipotaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Mambaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Mara Rosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Marzagão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Matrinchã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Maurilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Mimoso de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Minaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Mineiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Moiporá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Monte Alegre de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Montes Claros de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Montividiu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Montividiu do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Morrinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Morro Agudo de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Mossâmedes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Mozarlândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Mundo Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Mutunópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Nazário",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Nerópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Niquelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Nova América",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Nova Aurora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Nova Crixás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Nova Glória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Nova Iguaçu de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Nova Roma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Nova Veneza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Novo Brasil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Novo Gama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Novo Planalto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Orizona",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Ouro Verde de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Ouvidor",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Padre Bernardo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Palestina de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Palmeiras de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Palmelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Palminópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Panamá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Paranaiguara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Paraúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Perolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Petrolina de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Pilar de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Piracanjuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Piranhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Pirenópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Pires do Rio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Planaltina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Pontalina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Porangatu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Porteirão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Portelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Posse",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Professor Jamil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Quirinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Rialma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Rianápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Rio Quente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Rio Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Rubiataba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Sanclerlândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santa Bárbara de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santa Cruz de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santa Fé de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santa Helena de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santa Isabel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santa Rita do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santa Rita do Novo Destino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santa Rosa de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santa Tereza de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santa Terezinha de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santo Antônio da Barra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santo Antônio de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Santo Antônio do Descoberto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "São Domingos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "São Francisco de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "São João da Paraúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "São João d'Aliança",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "São Luís de Montes Belos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "São Luíz do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "São Miguel do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "São Miguel do Passa Quatro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "São Patrício",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "São Simão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Senador Canedo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Serranópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Silvânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Simolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Sítio d'Abadia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Taquaral de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Teresina de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Terezópolis de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Três Ranchos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Trindade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Trombas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Turvânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Turvelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Uirapuru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Uruaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Uruana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Urutaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Valparaíso de Goiás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Varjão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Vianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Vicentinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Vila Boa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 9,
        'nome' => "Vila Propício",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Açailândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Afonso Cunha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Água Doce do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Alcântara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Aldeias Altas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Altamira do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Alto Alegre do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Alto Alegre do Pindaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Alto Parnaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Amapá do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Amarante do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Anajatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Anapurus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Apicum-Açu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Araguanã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Araioses",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Arame",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Arari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Axixá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Bacabal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Bacabeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Bacuri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Bacurituba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Balsas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Barão de Grajaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Barra do Corda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Barreirinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Bela Vista do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Belágua",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Benedito Leite",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Bequimão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Bernardo do Mearim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Boa Vista do Gurupi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Bom Jardim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Bom Jesus das Selvas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Bom Lugar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Brejo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Brejo de Areia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Buriti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Buriti Bravo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Buriticupu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Buritirana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Cachoeira Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Cajapió",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Cajari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Campestre do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Cândido Mendes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Cantanhede",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Capinzal do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Carolina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Carutapera",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Caxias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Cedral",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Central do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Centro do Guilherme",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Centro Novo do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Chapadinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Cidelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Codó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Coelho Neto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Colinas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Conceição do Lago-Açu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Coroatá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Cururupu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Davinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Dom Pedro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Duque Bacelar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Esperantinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Estreito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Feira Nova do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Fernando Falcão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Formosa da Serra Negra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Fortaleza dos Nogueiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Fortuna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Godofredo Viana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Gonçalves Dias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Governador Archer",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Governador Edison Lobão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Governador Eugênio Barros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Governador Luiz Rocha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Governador Newton Bello",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Governador Nunes Freire",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Graça Aranha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Grajaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Guimarães",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Humberto de Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Icatu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Igarapé do Meio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Igarapé Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Imperatriz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Itaipava do Grajaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Itapecuru Mirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Itinga do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Jatobá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Jenipapo dos Vieiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "João Lisboa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Joselândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Junco do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Lago da Pedra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Lago do Junco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Lago dos Rodrigues",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Lago Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Lagoa do Mato",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Lagoa Grande do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Lajeado Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Lima Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Loreto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Luís Domingues",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Magalhães de Almeida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Maracaçumé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Marajá do Sena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Maranhãozinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Mata Roma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Matinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Matões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Matões do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Milagres do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Mirador",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Miranda do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Mirinzal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Monção",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Montes Altos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Morros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Nina Rodrigues",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Nova Colinas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Nova Iorque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Nova Olinda do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Olho d'Água das Cunhãs",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Olinda Nova do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Paço do Lumiar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Palmeirândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Paraibano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Parnarama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Passagem Franca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Pastos Bons",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Paulino Neves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Paulo Ramos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Pedreiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Pedro do Rosário",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Penalva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Peri Mirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Peritoró",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Pindaré-Mirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Pinheiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Pio XII",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Pirapemas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Poção de Pedras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Porto Franco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Porto Rico do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Presidente Dutra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Presidente Juscelino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Presidente Médici",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Presidente Sarney",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Presidente Vargas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Primeira Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Raposa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Riachão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Ribamar Fiquene",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Rosário",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Sambaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Santa Filomena do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Santa Helena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Santa Inês",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Santa Luzia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Santa Luzia do Paruá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Santa Quitéria do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Santa Rita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Santana do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Santo Amaro do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Santo Antônio dos Lopes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Benedito do Rio Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Bento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Bernardo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Domingos do Azeitão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Domingos do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Félix de Balsas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Francisco do Brejão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Francisco do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São João Batista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São João do Carú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São João do Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São João do Soter",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São João dos Patos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São José de Ribamar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São José dos Basílios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Luís",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Luís Gonzaga do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Mateus do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Pedro da Água Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Pedro dos Crentes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Raimundo das Mangabeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Raimundo do Doca Bezerra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Roberto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "São Vicente Ferrer",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Satubinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Senador Alexandre Costa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Senador La Rocque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Serrano do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Sítio Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Sucupira do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Sucupira do Riachão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Tasso Fragoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Timbiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Timon",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Trizidela do Vale",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Tufilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Tuntum",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Turiaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Turilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Tutóia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Urbano Santos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Vargem Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Viana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Vila Nova dos Martírios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Vitória do Mearim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Vitorino Freire",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 10,
        'nome' => "Zé Doca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Acorizal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Água Boa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Alta Floresta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Alto Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Alto Boa Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Alto Garças",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Alto Paraguai",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Alto Taquari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Apiacás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Araguaiana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Araguainha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Araputanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Arenápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Aripuanã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Barão de Melgaço",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Barra do Bugres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Barra do Garças",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Bom Jesus do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Brasnorte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Cáceres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Campinápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Campo Novo do Parecis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Campo Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Campos de Júlio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Canabrava do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Canarana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Carlinda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Castanheira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Chapada dos Guimarães",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Cláudia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Cocalinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Colíder",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Colniza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Comodoro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Confresa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Conquista D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Cotriguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Cuiabá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Curvelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Denise",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Diamantino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Dom Aquino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Feliz Natal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Figueirópolis D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Gaúcha do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "General Carneiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Glória D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Guarantã do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Guiratinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Indiavaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Ipiranga do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Itanhangá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Itaúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Itiquira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Jaciara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Jangada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Jauru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Juara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Juína",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Juruena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Juscimeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Lambari D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Lucas do Rio Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Luciara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Marcelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Matupá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Mirassol d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nobres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nortelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nossa Senhora do Livramento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Bandeirantes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Brasilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Canaã do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Guarita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Lacerda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Marilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Maringá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Monte Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Mutum",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Nazaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Olímpia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Santa Helena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Ubiratã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Nova Xavantina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Novo Horizonte do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Novo Mundo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Novo Santo Antônio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Novo São Joaquim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Paranaíta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Paranatinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Pedra Preta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Peixoto de Azevedo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Planalto da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Poconé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Pontal do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Ponte Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Pontes e Lacerda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Porto Alegre do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Porto dos Gaúchos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Porto Esperidião",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Porto Estrela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Poxoréo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Primavera do Leste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Querência",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Reserva do Cabaçal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Ribeirão Cascalheira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Ribeirãozinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Rio Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Rondolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Rondonópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Rosário Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Salto do Céu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Santa Carmem",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Santa Cruz do Xingu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Santa Rita do Trivelato",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Santa Terezinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Santo Afonso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Santo Antônio do Leste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Santo Antônio do Leverger",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "São Félix do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "São José do Povo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "São José do Rio Claro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "São José do Xingu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "São José dos Quatro Marcos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "São Pedro da Cipa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Sapezal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Serra Nova Dourada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Sinop",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Sorriso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Tabaporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Tangará da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Tapurah",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Terra Nova do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Tesouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Torixoréu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "União do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Vale de São Domingos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Várzea Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Vera",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Vila Bela da Santíssima Trindade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 11,
        'nome' => "Vila Rica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Água Clara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Alcinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Amambai",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Anastácio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Anaurilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Angélica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Antônio João",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Aparecida do Taboado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Aquidauana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Aral Moreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Bandeirantes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Bataguassu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Batayporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Bela Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Bodoquena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Bonito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Brasilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Caarapó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Camapuã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Campo Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Caracol",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Cassilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Chapadão do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Corguinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Coronel Sapucaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Corumbá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Costa Rica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Coxim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Deodápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Dois Irmãos do Buriti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Douradina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Dourados",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Eldorado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Fátima do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Figueirão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Glória de Dourados",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Guia Lopes da Laguna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Iguatemi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Inocência",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Itaporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Itaquiraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Ivinhema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Japorã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Jaraguari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Jardim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Jateí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Juti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Ladário",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Laguna Carapã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Maracaju",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Miranda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Mundo Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Naviraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Nioaque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Nova Alvorada do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Nova Andradina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Novo Horizonte do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Paranaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Paranhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Pedro Gomes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Ponta Porã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Porto Murtinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Ribas do Rio Pardo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Rio Brilhante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Rio Negro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Rio Verde de Mato Grosso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Rochedo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Santa Rita do Pardo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "São Gabriel do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Selvíria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Sete Quedas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Sidrolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Sonora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Tacuru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Taquarussu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Terenos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Três Lagoas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 12,
        'nome' => "Vicentina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Abadia dos Dourados",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Abaeté",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Abre Campo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Acaiaca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Açucena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Água Boa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Água Comprida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Aguanil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Águas Formosas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Águas Vermelhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Aimorés",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Aiuruoca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alagoa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Albertina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Além Paraíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alfenas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alfredo Vasconcelos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Almenara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alpercata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alpinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alterosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alto Caparaó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alto Jequitibá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alto Rio Doce",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alvarenga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alvinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Alvorada de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Amparo do Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Andradas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Andrelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Angelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Antônio Carlos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Antônio Dias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Antônio Prado de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Araçaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Aracitaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Araçuaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Araguari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Arantina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Araponga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Araporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Arapuá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Araújos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Araxá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Arceburgo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Arcos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Areado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Argirita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Aricanduva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Arinos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Astolfo Dutra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ataléia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Augusto de Lima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Baependi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Baldim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bambuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bandeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bandeira do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Barão de Cocais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Barão de Monte Alto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Barbacena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Barra Longa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Barroso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bela Vista de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Belmiro Braga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Belo Horizonte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Belo Oriente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Belo Vale",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Berilo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Berizal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bertópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Betim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bias Fortes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bicas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Biquinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Boa Esperança",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bocaina de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bocaiúva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bom Despacho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bom Jardim de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bom Jesus da Penha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bom Jesus do Amparo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bom Jesus do Galho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bom Repouso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bom Sucesso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bonfim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bonfinópolis de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bonito de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Borda da Mata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Botelhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Botumirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Brás Pires",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Brasilândia de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Brasília de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Brasópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Braúnas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Brumadinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bueno Brandão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Buenópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Bugre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Buritis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Buritizeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cabeceira Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cabo Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cachoeira da Prata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cachoeira de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cachoeira de Pajeú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cachoeira Dourada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Caetanópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Caeté",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Caiana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cajuri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Caldas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Camacho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Camanducaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cambuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cambuquira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Campanário",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Campanha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Campestre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Campina Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Campo Azul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Campo Belo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Campo do Meio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Campo Florido",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Campos Altos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Campos Gerais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cana Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Canaã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Canápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Candeias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cantagalo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Caparaó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Capela Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Capelinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Capetinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Capim Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Capinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Capitão Andrade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Capitão Enéas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Capitólio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Caputira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Caraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Caranaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carandaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carangola",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Caratinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carbonita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Careaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carlos Chagas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carmésia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carmo da Cachoeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carmo da Mata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carmo de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carmo do Cajuru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carmo do Paranaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carmo do Rio Claro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carmópolis de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carneirinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carrancas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carvalhópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Carvalhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Casa Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cascalho Rico",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cássia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cataguases",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Catas Altas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Catas Altas da Noruega",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Catuji",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Catuti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Caxambu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cedro do Abaeté",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Central de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Centralina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Chácara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Chalé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Chapada do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Chapada Gaúcha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Chiador",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cipotânea",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Claraval",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Claro dos Poções",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cláudio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Coimbra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Coluna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Comendador Gomes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Comercinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conceição da Aparecida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conceição da Barra de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conceição das Alagoas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conceição das Pedras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conceição de Ipanema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conceição do Mato Dentro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conceição do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conceição do Rio Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conceição dos Ouros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cônego Marinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Confins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Congonhal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Congonhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Congonhas do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conquista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conselheiro Lafaiete",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Conselheiro Pena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Consolação",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Contagem",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Coqueiral",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Coração de Jesus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cordisburgo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cordislândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Corinto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Coroaci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Coromandel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Coronel Fabriciano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Coronel Murta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Coronel Pacheco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Coronel Xavier Chaves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Córrego Danta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Córrego do Bom Jesus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Córrego Fundo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Córrego Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Couto de Magalhães de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Crisólita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cristais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cristália",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cristiano Otoni",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cristina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Crucilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cruzeiro da Fortaleza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cruzília",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Cuparaque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Curral de Dentro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Curvelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Datas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Delfim Moreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Delfinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Delta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Descoberto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Desterro de Entre Rios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Desterro do Melo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Diamantina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Diogo de Vasconcelos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Dionísio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Divinésia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Divino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Divino das Laranjeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Divinolândia de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Divinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Divisa Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Divisa Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Divisópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Dom Bosco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Dom Cavati",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Dom Joaquim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Dom Silvério",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Dom Viçoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Dona Eusébia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Dores de Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Dores de Guanhães",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Dores do Indaiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Dores do Turvo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Doresópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Douradoquara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Durandé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Elói Mendes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Engenheiro Caldas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Engenheiro Navarro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Entre Folhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Entre Rios de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ervália",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Esmeraldas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Espera Feliz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Espinosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Espírito Santo do Dourado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Estiva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Estrela Dalva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Estrela do Indaiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Estrela do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Eugenópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ewbank da Câmara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Extrema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Fama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Faria Lemos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Felício dos Santos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Felisburgo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Felixlândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Fernandes Tourinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ferros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Fervedouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Florestal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Formiga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Formoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Fortaleza de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Fortuna de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Francisco Badaró",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Francisco Dumont",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Francisco Sá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Franciscópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Frei Gaspar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Frei Inocêncio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Frei Lagonegro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Fronteira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Fronteira dos Vales",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Fruta de Leite",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Frutal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Funilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Galiléia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Gameleiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Glaucilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Goiabeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Goianá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Gonçalves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Gonzaga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Gouveia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Governador Valadares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Grão Mogol",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Grupiara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guanhães",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guapé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guaraciaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guaraciama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guaranésia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guarani",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guarará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guarda-Mor",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guaxupé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guidoval",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guimarânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Guiricema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Gurinhatã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Heliodora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Iapu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ibertioga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ibiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ibiaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ibiracatu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ibiraci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ibirité",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ibitiúra de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ibituruna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Icaraí de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Igarapé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Igaratinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Iguatama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ijaci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ilicínea",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Imbé de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Inconfidentes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Indaiabira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Indianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ingaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Inhapim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Inhaúma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Inimutaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ipaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ipanema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ipatinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ipiaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ipuiúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Iraí de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itabira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itabirinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itabirito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itacambira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itacarambi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itaguara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itaipé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itajubá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itamarandiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itamarati de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itambacuri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itambé do Mato Dentro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itamogi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itamonte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itanhandu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itanhomi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itaobim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itapagipe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itapecerica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itapeva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itatiaiuçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itaú de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itaúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itaverava",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itueta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ituiutaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itumirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Iturama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Itutinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jaboticatubas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jacinto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jacuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jacutinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jaguaraçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jampruca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Janaúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Januária",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Japaraíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Japonvar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jeceaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jenipapo de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jequeri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jequitaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jequitibá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jequitinhonha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jesuânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Joaíma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Joanésia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "João Monlevade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "João Pinheiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Joaquim Felício",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Jordânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "José Gonçalves de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "José Raydan",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Josenópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Juatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Juiz de Fora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Juramento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Juruaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Juvenília",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ladainha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lagamar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lagoa da Prata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lagoa dos Patos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lagoa Dourada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lagoa Formosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lagoa Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lagoa Santa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lajinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lambari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lamim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Laranjal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lassance",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lavras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Leandro Ferreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Leme do Prado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Leopoldina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Liberdade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lima Duarte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Limeira do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Lontra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Luisburgo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Luislândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Luminárias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Luz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Machacalis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Machado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Madre de Deus de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Malacacheta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mamonas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Manga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Manhuaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Manhumirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mantena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mar de Espanha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Maravilhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Maria da Fé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mariana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Marilac",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mário Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Maripá de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Marliéria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Marmelópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Martinho Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Martins Soares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mata Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Materlândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mateus Leme",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mathias Lobato",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Matias Barbosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Matias Cardoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Matipó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mato Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Matozinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Matutina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Medeiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Medina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mendes Pimentel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mercês",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mesquita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Minas Novas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Minduri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mirabela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Miradouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Miraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Miravânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Moeda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Moema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Monjolos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Monsenhor Paulo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Montalvânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Monte Alegre de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Monte Azul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Monte Belo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Monte Carmelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Monte Formoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Monte Santo de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Monte Sião",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Montes Claros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Montezuma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Morada Nova de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Morro da Garça",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Morro do Pilar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Munhoz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Muriaé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Mutum",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Muzambinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nacip Raydan",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nanuque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Naque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Natalândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Natércia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nazareno",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nepomuceno",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ninheira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nova Belém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nova Era",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nova Lima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nova Módica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nova Ponte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nova Porteirinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nova Resende",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nova Serrana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Nova União",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Novo Cruzeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Novo Oriente de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Novorizonte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Olaria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Olhos-d'Água",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Olímpio Noronha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Oliveira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Oliveira Fortes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Onça de Pitangui",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Oratórios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Orizânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ouro Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ouro Fino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ouro Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ouro Verde de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Padre Carvalho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Padre Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pai Pedro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Paineiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pains",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Paiva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Palma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Palmópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Papagaios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pará de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Paracatu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Paraguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Paraisópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Paraopeba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Passa Quatro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Passa Tempo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Passabém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Passa-Vinte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Passos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Patis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Patos de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Patrocínio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Patrocínio do Muriaé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Paula Cândido",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Paulistas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pavão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Peçanha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pedra Azul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pedra Bonita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pedra do Anta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pedra do Indaiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pedra Dourada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pedralva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pedras de Maria da Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pedrinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pedro Leopoldo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pedro Teixeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pequeri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pequi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Perdigão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Perdizes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Perdões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Periquito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pescador",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Piau",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Piedade de Caratinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Piedade de Ponte Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Piedade do Rio Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Piedade dos Gerais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pimenta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pingo-d'Água",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pintópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Piracema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pirajuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Piranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Piranguçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Piranguinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pirapetinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pirapora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Piraúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pitangui",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Piumhi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Planura",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Poço Fundo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Poços de Caldas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pocrane",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pompéu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ponte Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ponto Chique",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ponto dos Volantes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Porteirinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Porto Firme",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Poté",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pouso Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pouso Alto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Prados",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Prata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pratápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Pratinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Presidente Bernardes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Presidente Juscelino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Presidente Kubitschek",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Presidente Olegário",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Prudente de Morais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Quartel Geral",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Queluzito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Raposos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Raul Soares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Recreio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Reduto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Resende Costa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Resplendor",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ressaquinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Riachinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Riacho dos Machados",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ribeirão das Neves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ribeirão Vermelho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Acima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Casca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio do Prado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Doce",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Espera",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Manso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Paranaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Pardo de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Piracicaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Pomba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rio Vermelho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ritápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rochedo de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rodeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Romaria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rosário da Limeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rubelita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Rubim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Sabará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Sabinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Sacramento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Salinas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Salto da Divisa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Bárbara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Bárbara do Leste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Bárbara do Monte Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Bárbara do Tugúrio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Cruz de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Cruz de Salinas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Cruz do Escalvado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Efigênia de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Fé de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Helena de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Juliana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Luzia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Margarida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Maria de Itabira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Maria do Salto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Maria do Suaçuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Rita de Caldas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Rita de Ibitipoca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Rita de Jacutinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Rita de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Rita do Itueto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Rita do Sapucaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Rosa da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santa Vitória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santana da Vargem",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santana de Cataguases",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santana de Pirapama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santana do Deserto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santana do Garambéu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santana do Jacaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santana do Manhuaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santana do Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santana do Riacho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santana dos Montes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santo Antônio do Amparo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santo Antônio do Aventureiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santo Antônio do Grama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santo Antônio do Itambé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santo Antônio do Jacinto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santo Antônio do Monte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santo Antônio do Retiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santo Antônio do Rio Abaixo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santo Hipólito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Santos Dumont",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Bento Abade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Brás do Suaçuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Domingos das Dores",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Domingos do Prata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Félix de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Francisco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Francisco de Paula",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Francisco de Sales",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Francisco do Glória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Geraldo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Geraldo da Piedade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Geraldo do Baixio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Gonçalo do Abaeté",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Gonçalo do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Gonçalo do Rio Abaixo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Gonçalo do Rio Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Gonçalo do Sapucaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Gotardo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João Batista do Glória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João da Lagoa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João da Mata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João da Ponte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João del Rei",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João do Manhuaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João do Manteninha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João do Oriente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João do Pacuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João do Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João Evangelista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São João Nepomuceno",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Joaquim de Bicas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São José da Barra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São José da Lapa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São José da Safira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São José da Varginha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São José do Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São José do Divino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São José do Goiabal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São José do Jacuri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São José do Mantimento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Lourenço",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Miguel do Anta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Pedro da União",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Pedro do Suaçuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Pedro dos Ferros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Romão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Roque de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Sebastião da Bela Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Sebastião da Vargem Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Sebastião do Anta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Sebastião do Maranhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Sebastião do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Sebastião do Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Sebastião do Rio Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Sebastião do Rio Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Thomé das Letras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Tiago",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Tomás de Aquino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "São Vicente de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Sapucaí-Mirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Sardoá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Sarzedo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Sem-Peixe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Senador Amaral",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Senador Cortes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Senador Firmino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Senador José Bento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Senador Modestino Gonçalves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Senhora de Oliveira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Senhora do Porto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Senhora dos Remédios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Sericita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Seritinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Serra Azul de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Serra da Saudade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Serra do Salitre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Serra dos Aimorés",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Serrania",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Serranópolis de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Serranos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Serro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Sete Lagoas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Setubinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Silveirânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Silvianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Simão Pereira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Simonésia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Sobrália",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Soledade de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Tabuleiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Taiobeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Taparuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Tapira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Tapiraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Taquaraçu de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Tarumirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Teixeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Teófilo Otoni",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Timóteo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Tiradentes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Tiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Tocos do Moji",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Toledo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Tombos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Três Corações",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Três Marias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Três Pontas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Tumiritinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Tupaciguara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Turmalina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Turvolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ubá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ubaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Ubaporanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Uberaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Uberlândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Umburatiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Unaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "União de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Uruana de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Urucânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Urucuia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Vargem Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Vargem Bonita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Vargem Grande do Rio Pardo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Varginha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Varjão de Minas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Várzea da Palma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Varzelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Vazante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Verdelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Veredinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Veríssimo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Vermelho Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Vespasiano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Viçosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Vieiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Virgem da Lapa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Virgínia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Virginópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Virgolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Visconde do Rio Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Volta Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 13,
        'nome' => "Wenceslau Braz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Abaetetuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Abel Figueiredo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Acará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Afuá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Água Azul do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Alenquer",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Almeirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Altamira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Anajás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Ananindeua",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Anapu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Augusto Corrêa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Aurora do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Aveiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Bagre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Baião",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Bannach",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Barcarena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Belém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Belterra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Benevides",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Bom Jesus do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Bonito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Bragança",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Brasil Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Brejo Grande do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Breu Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Breves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Bujaru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Cachoeira do Arari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Cachoeira do Piriá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Cametá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Canaã dos Carajás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Capanema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Capitão Poço",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Castanhal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Chaves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Colares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Conceição do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Concórdia do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Cumaru do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Curionópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Curralinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Curuá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Curuçá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Dom Eliseu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Eldorado dos Carajás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Faro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Floresta do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Garrafão do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Goianésia do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Gurupá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Igarapé-Açu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Igarapé-Miri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Inhangapi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Ipixuna do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Irituia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Itaituba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Itupiranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Jacareacanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Jacundá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Juruti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Limoeiro do Ajuru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Mãe do Rio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Magalhães Barata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Marabá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Maracanã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Marapanim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Marituba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Medicilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Melgaço",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Mocajuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Moju",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Monte Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Muaná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Nova Esperança do Piriá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Nova Ipixuna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Nova Timboteua",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Novo Progresso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Novo Repartimento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Óbidos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Oeiras do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Oriximiná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Ourém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Ourilândia do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Pacajá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Palestina do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Paragominas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Parauapebas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Pau D'Arco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Peixe-Boi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Piçarra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Placas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Ponta de Pedras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Portel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Porto de Moz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Prainha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Primavera",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Quatipuru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Redenção",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Rio Maria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Rondon do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Rurópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Salinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Salvaterra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Santa Bárbara do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Santa Cruz do Arari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Santa Isabel do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Santa Luzia do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Santa Maria das Barreiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Santa Maria do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Santana do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Santarém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Santarém Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Santo Antônio do Tauá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "São Caetano de Odivelas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "São Domingos do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "São Domingos do Capim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "São Félix do Xingu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "São Francisco do Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "São Geraldo do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "São João da Ponta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "São João de Pirabas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "São João do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "São Miguel do Guamá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "São Sebastião da Boa Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Sapucaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Senador José Porfírio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Soure",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Tailândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Terra Alta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Terra Santa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Tomé-Açu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Tracuateua",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Trairão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Tucumã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Tucuruí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Ulianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Uruará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Vigia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Viseu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Vitória do Xingu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 14,
        'nome' => "Xinguara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Água Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Aguiar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Alagoa Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Alagoa Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Alagoinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Alcantil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Algodão de Jandaíra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Alhandra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Amparo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Aparecida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Araçagi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Arara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Araruna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Areia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Areia de Baraúnas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Areial",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Aroeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Assunção",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Baía da Traição",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Bananeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Baraúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Barra de Santa Rosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Barra de Santana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Barra de São Miguel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Bayeux",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Belém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Belém do Brejo do Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Bernardino Batista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Boa Ventura",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Boa Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Bom Jesus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Bom Sucesso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Bonito de Santa Fé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Boqueirão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Borborema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Brejo do Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Brejo dos Santos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Caaporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cabaceiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cabedelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cachoeira dos Índios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cacimba de Areia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cacimba de Dentro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cacimbas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Caiçara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cajazeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cajazeirinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Caldas Brandão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Camalaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Campina Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Tacima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Capim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Caraúbas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Carrapateira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Casserengue",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Catingueira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Catolé do Rocha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Caturité",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Conceição",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Condado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Conde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Congo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Coremas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Coxixola",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cruz do Espírito Santo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cubati",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cuité",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cuité de Mamanguape",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Cuitegi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Curral de Cima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Curral Velho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Damião",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Desterro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Diamante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Dona Inês",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Duas Estradas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Emas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Esperança",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Fagundes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Frei Martinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Gado Bravo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Guarabira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Gurinhém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Gurjão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Ibiara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Igaracy",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Imaculada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Ingá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Itabaiana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Itaporanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Itapororoca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Itatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Jacaraú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Jericó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "João Pessoa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Juarez Távora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Juazeirinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Junco do Seridó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Juripiranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Juru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Lagoa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Lagoa de Dentro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Lagoa Seca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Lastro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Livramento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Logradouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Lucena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Mãe d'Água",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Malta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Mamanguape",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Manaíra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Marcação",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Mari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Marizópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Massaranduba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Mataraca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Matinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Mato Grosso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Maturéia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Mogeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Montadas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Monte Horebe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Monteiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Mulungu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Natuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Nazarezinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Nova Floresta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Nova Olinda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Nova Palmeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Olho d'Água",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Olivedos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Ouro Velho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Parari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Passagem",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Patos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Pedra Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Pedra Lavrada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Pedras de Fogo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Pedro Régis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Piancó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Picuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Pilar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Pilões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Pilõezinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Pirpirituba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Pitimbu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Pocinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Poço Dantas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Poço de José de Moura",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Pombal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Prata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Princesa Isabel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Puxinanã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Queimadas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Quixabá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Remígio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Riachão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Riachão do Bacamarte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Riachão do Poço",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Riacho de Santo Antônio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Riacho dos Cavalos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Rio Tinto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Salgadinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Salgado de São Félix",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Santa Cecília",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Santa Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Santa Helena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Santa Inês",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Santa Luzia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Santa Rita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Santa Teresinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Santana de Mangueira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Santana dos Garrotes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Joca Claudino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Santo André",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São Bentinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São Bento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São Domingos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São Domingos do Cariri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São Francisco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São João do Cariri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São João do Rio do Peixe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São João do Tigre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São José da Lagoa Tapada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São José de Caiana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São José de Espinharas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São José de Piranhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São José de Princesa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São José do Bonfim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São José do Brejo do Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São José do Sabugi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São José dos Cordeiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São José dos Ramos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São Mamede",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São Miguel de Taipu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São Sebastião de Lagoa de Roça",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "São Sebastião do Umbuzeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Sapé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Seridó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Serra Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Serra da Raiz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Serra Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Serra Redonda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Serraria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Sertãozinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Sobrado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Solânea",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Soledade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Sossêgo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Sousa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Sumé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Taperoá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Tavares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Teixeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Tenório",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Triunfo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Uiraúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Umbuzeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Várzea",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Vieirópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Vista Serrana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 15,
        'nome' => "Zabelê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Abatiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Adrianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Agudos do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Almirante Tamandaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Altamira do Paraná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Alto Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Alto Paraná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Alto Piquiri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Altônia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Alvorada do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Amaporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ampére",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Anahy",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Andirá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ângulo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Antonina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Antônio Olinto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Apucarana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Arapongas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Arapoti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Arapuã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Araruna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Araucária",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ariranha do Ivaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Assaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Assis Chateaubriand",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Astorga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Atalaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Balsa Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Bandeirantes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Barbosa Ferraz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Barra do Jacaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Barracão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Bela Vista da Caroba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Bela Vista do Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Bituruna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Boa Esperança",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Boa Esperança do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Boa Ventura de São Roque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Boa Vista da Aparecida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Bocaiúva do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Bom Jesus do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Bom Sucesso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Bom Sucesso do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Borrazópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Braganey",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Brasilândia do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cafeara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cafelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cafezal do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Califórnia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cambará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cambé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cambira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Campina da Lagoa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Campina do Simão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Campina Grande do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Campo Bonito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Campo do Tenente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Campo Largo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Campo Magro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Campo Mourão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cândido de Abreu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Candói",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cantagalo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Capanema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Capitão Leônidas Marques",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Carambeí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Carlópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cascavel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Castro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Catanduvas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Centenário do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cerro Azul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Céu Azul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Chopinzinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cianorte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cidade Gaúcha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Clevelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Colombo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Colorado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Congonhinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Conselheiro Mairinck",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Contenda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Corbélia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cornélio Procópio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Coronel Domingos Soares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Coronel Vivida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Corumbataí do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cruz Machado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cruzeiro do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cruzeiro do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cruzeiro do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Cruzmaltina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Curitiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Curiúva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Diamante do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Diamante do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Diamante D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Dois Vizinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Douradina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Doutor Camargo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Doutor Ulysses",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Enéas Marques",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Engenheiro Beltrão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Entre Rios do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Esperança Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Espigão Alto do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Farol",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Faxinal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Fazenda Rio Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Fênix",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Fernandes Pinheiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Figueira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Flor da Serra do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Floraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Floresta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Florestópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Flórida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Formosa do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Foz do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Foz do Jordão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Francisco Alves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Francisco Beltrão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "General Carneiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Godoy Moreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Goioerê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Goioxim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Grandes Rios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Guaíra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Guairaçá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Guamiranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Guapirama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Guaporema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Guaraci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Guaraniaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Guarapuava",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Guaraqueçaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Guaratuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Honório Serpa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ibaiti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ibema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ibiporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Icaraíma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Iguaraçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Iguatu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Imbaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Imbituva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Inácio Martins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Inajá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Indianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ipiranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Iporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Iracema do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Irati",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Iretama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Itaguajé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Itaipulândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Itambaracá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Itambé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Itapejara d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Itaperuçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Itaúna do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ivaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ivaiporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ivaté",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ivatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Jaboti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Jacarezinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Jaguapitã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Jaguariaíva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Jandaia do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Janiópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Japira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Japurá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Jardim Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Jardim Olinda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Jataizinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Jesuítas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Joaquim Távora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Jundiaí do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Juranda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Jussara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Kaloré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Lapa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Laranjal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Laranjeiras do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Leópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Lidianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Lindoeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Loanda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Lobato",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Londrina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Luiziana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Lunardelli",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Lupionópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mallet",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mamborê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mandaguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mandaguari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mandirituba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Manfrinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mangueirinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Manoel Ribas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Marechal Cândido Rondon",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Maria Helena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Marialva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Marilândia do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Marilena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mariluz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Maringá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mariópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Maripá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Marmeleiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Marquinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Marumbi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Matelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Matinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mato Rico",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mauá da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Medianeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mercedes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Mirador",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Miraselva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Missal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Moreira Sales",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Morretes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Munhoz de Melo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nossa Senhora das Graças",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Aliança do Ivaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova América da Colina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Aurora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Cantu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Esperança",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Esperança do Sudoeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Fátima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Laranjeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Londrina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Olímpia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Prata do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Santa Bárbara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Santa Rosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Nova Tebas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Novo Itacolomi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ortigueira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ourizona",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ouro Verde do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Paiçandu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Palmas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Palmeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Palmital",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Palotina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Paraíso do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Paranacity",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Paranaguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Paranapoema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Paranavaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pato Bragado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pato Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Paula Freitas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Paulo Frontin",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Peabiru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Perobal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pérola",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pérola d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Piên",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pinhais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pinhal de São Bento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pinhalão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pinhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Piraí do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Piraquara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pitanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pitangueiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Planaltina do Paraná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Planalto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ponta Grossa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pontal do Paraná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Porecatu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Porto Amazonas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Porto Barreiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Porto Rico",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Porto Vitória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Prado Ferreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Pranchita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Presidente Castelo Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Primeiro de Maio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Prudentópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Quarto Centenário",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Quatiguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Quatro Barras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Quatro Pontes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Quedas do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Querência do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Quinta do Sol",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Quitandinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ramilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rancho Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rancho Alegre D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Realeza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rebouças",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Renascença",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Reserva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Reserva do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ribeirão Claro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ribeirão do Pinhal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rio Azul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rio Bom",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rio Bonito do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rio Branco do Ivaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rio Branco do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rio Negro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Roncador",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rondon",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Rosário do Ivaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Sabáudia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Salgado Filho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Salto do Itararé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Salto do Lontra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Amélia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Cecília do Pavão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Cruz de Monte Castelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Fé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Helena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Inês",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Isabel do Ivaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Izabel do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Lúcia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Maria do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Mariana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Mônica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Tereza do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santa Terezinha de Itaipu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santana do Itararé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santo Antônio da Platina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santo Antônio do Caiuá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santo Antônio do Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santo Antônio do Sudoeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Santo Inácio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Carlos do Ivaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Jerônimo da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São João",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São João do Caiuá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São João do Ivaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São João do Triunfo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Jorge do Ivaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Jorge do Patrocínio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Jorge d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São José da Boa Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São José das Palmeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São José dos Pinhais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Manoel do Paraná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Mateus do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Miguel do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Pedro do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Pedro do Ivaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Pedro do Paraná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Sebastião da Amoreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "São Tomé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Sapopema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Sarandi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Saudade do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Sengés",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Serranópolis do Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Sertaneja",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Sertanópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Siqueira Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Sulina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Tamarana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Tamboara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Tapejara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Tapira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Teixeira Soares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Telêmaco Borba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Terra Boa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Terra Rica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Terra Roxa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Tibagi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Tijucas do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Toledo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Tomazina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Três Barras do Paraná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Tunas do Paraná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Tuneiras do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Tupãssi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Turvo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ubiratã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Umuarama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "União da Vitória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Uniflor",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Uraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Ventania",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Vera Cruz do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Verê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Virmond",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Vitorino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Wenceslau Braz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 16,
        'nome' => "Xambrê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Abreu e Lima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Afogados da Ingazeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Afrânio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Agrestina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Água Preta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Águas Belas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Alagoinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Aliança",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Altinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Amaraji",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Angelim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Araçoiaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Araripina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Arcoverde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Barra de Guabiraba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Barreiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Belém de Maria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Belém do São Francisco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Belo Jardim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Betânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Bezerros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Bodocó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Bom Conselho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Bom Jardim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Bonito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Brejão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Brejinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Brejo da Madre de Deus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Buenos Aires",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Buíque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Cabo de Santo Agostinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Cabrobó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Cachoeirinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Caetés",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Calçado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Calumbi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Camaragibe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Camocim de São Félix",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Camutanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Canhotinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Capoeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Carnaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Carnaubeira da Penha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Carpina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Caruaru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Casinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Catende",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Cedro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Chã de Alegria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Chã Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Condado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Correntes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Cortês",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Cumaru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Cupira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Custódia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Dormentes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Escada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Exu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Feira Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Fernando de Noronha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Ferreiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Flores",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Floresta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Frei Miguelinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Gameleira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Garanhuns",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Glória do Goitá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Goiana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Granito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Gravatá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Iati",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Ibimirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Ibirajuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Igarassu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Iguaraci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Ilha de Itamaracá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Inajá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Ingazeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Ipojuca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Ipubi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Itacuruba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Itaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Itambé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Itapetim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Itapissuma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Itaquitinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Jaboatão dos Guararapes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Jaqueira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Jataúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Jatobá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "João Alfredo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Joaquim Nabuco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Jucati",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Jupi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Jurema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Lagoa do Carro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Lagoa de Itaenga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Lagoa do Ouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Lagoa dos Gatos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Lagoa Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Lajedo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Limoeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Macaparana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Machados",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Manari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Maraial",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Mirandiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Moreilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Moreno",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Nazaré da Mata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Olinda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Orobó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Orocó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Ouricuri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Palmares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Palmeirina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Panelas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Paranatama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Parnamirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Passira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Paudalho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Pedra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Pesqueira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Petrolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Petrolina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Poção",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Pombos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Primavera",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Quipapá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Quixaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Recife",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Riacho das Almas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Ribeirão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Rio Formoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Sairé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Salgadinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Salgueiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Saloá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Sanharó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Santa Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Santa Cruz da Baixa Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Santa Cruz do Capibaribe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Santa Filomena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Santa Maria da Boa Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Santa Maria do Cambucá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Santa Terezinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "São Benedito do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "São Bento do Una",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "São Caitano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "São João",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "São Joaquim do Monte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "São José da Coroa Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "São José do Belmonte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "São José do Egito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "São Lourenço da Mata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "São Vicente Ferrer",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Serra Talhada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Serrita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Sertânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Sirinhaém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Solidão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Surubim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Tabira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Tacaimbó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Tacaratu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Tamandaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Taquaritinga do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Terezinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Terra Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Timbaúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Toritama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Tracunhaém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Trindade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Triunfo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Tupanatinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Tuparetama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Venturosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Verdejante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Vertente do Lério",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Vertentes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Vicência",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Vitória de Santo Antão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 17,
        'nome' => "Xexéu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Acauã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Agricolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Água Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Alagoinha do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Alegrete do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Alto Longá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Altos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Alvorada do Gurguéia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Amarante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Angical do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Anísio de Abreu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Antônio Almeida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Aroazes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Aroeiras do Itaim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Arraial",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Assunção do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Avelino Lopes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Baixa Grande do Ribeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Barra D'Alcântara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Barras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Barreiras do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Barro Duro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Batalha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Bela Vista do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Belém do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Beneditinos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Bertolínia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Betânia do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Boa Hora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Bocaina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Bom Jesus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Bom Princípio do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Bonfim do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Boqueirão do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Brasileira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Brejo do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Buriti dos Lopes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Buriti dos Montes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Cabeceiras do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Cajazeiras do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Cajueiro da Praia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Caldeirão Grande do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Campinas do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Campo Alegre do Fidalgo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Campo Grande do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Campo Largo do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Campo Maior",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Canavieira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Canto do Buriti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Capitão de Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Capitão Gervásio Oliveira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Caracol",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Caraúbas do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Caridade do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Castelo do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Caxingó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Cocal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Cocal de Telha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Cocal dos Alves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Coivaras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Colônia do Gurguéia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Colônia do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Conceição do Canindé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Coronel José Dias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Corrente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Cristalândia do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Cristino Castro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Curimatá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Currais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Curral Novo do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Curralinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Demerval Lobão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Dirceu Arcoverde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Dom Expedito Lopes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Dom Inocêncio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Domingos Mourão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Elesbão Veloso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Eliseu Martins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Esperantina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Fartura do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Flores do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Floresta do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Floriano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Francinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Francisco Ayres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Francisco Macedo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Francisco Santos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Fronteiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Geminiano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Gilbués",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Guadalupe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Guaribas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Hugo Napoleão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Ilha Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Inhuma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Ipiranga do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Isaías Coelho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Itainópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Itaueira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Jacobina do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Jaicós",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Jardim do Mulato",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Jatobá do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Jerumenha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "João Costa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Joaquim Pires",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Joca Marques",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "José de Freitas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Juazeiro do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Júlio Borges",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Jurema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Lagoa Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Lagoa de São Francisco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Lagoa do Barro do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Lagoa do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Lagoa do Sítio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Lagoinha do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Landri Sales",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Luís Correia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Luzilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Madeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Manoel Emídio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Marcolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Marcos Parente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Massapê do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Matias Olímpio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Miguel Alves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Miguel Leão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Milton Brandão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Monsenhor Gil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Monsenhor Hipólito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Monte Alegre do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Morro Cabeça no Tempo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Morro do Chapéu do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Murici dos Portelas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Nazaré do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Nazária ",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Nossa Senhora de Nazaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Nossa Senhora dos Remédios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Nova Santa Rita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Novo Oriente do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Novo Santo Antônio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Oeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Olho D'Água do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Padre Marcos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Paes Landim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Pajeú do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Palmeira do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Palmeirais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Paquetá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Parnaguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Parnaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Passagem Franca do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Patos do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Pau D'Arco do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Paulistana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Pavussu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Pedro II",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Pedro Laurentino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Picos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Pimenteiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Pio IX",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Piracuruca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Piripiri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Porto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Porto Alegre do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Prata do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Queimada Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Redenção do Gurguéia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Regeneração",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Riacho Frio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Ribeira do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Ribeiro Gonçalves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Rio Grande do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Santa Cruz do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Santa Cruz dos Milagres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Santa Filomena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Santa Luz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Santa Rosa do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Santana do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Santo Antônio de Lisboa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Santo Antônio dos Milagres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Santo Inácio do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Braz do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Félix do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Francisco de Assis do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Francisco do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Gonçalo do Gurguéia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Gonçalo do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São João da Canabrava",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São João da Fronteira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São João da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São João da Varjota",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São João do Arraial",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São João do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São José do Divino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São José do Peixe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São José do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Julião",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Lourenço do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Luis do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Miguel da Baixa Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Miguel do Fidalgo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Miguel do Tapuio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Pedro do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "São Raimundo Nonato",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Sebastião Barros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Sebastião Leal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Sigefredo Pacheco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Simões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Simplício Mendes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Socorro do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Sussuapara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Tamboril do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Tanque do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Teresina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "União",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Uruçuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Valença do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Várzea Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Várzea Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Vera Mendes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Vila Nova do Piauí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 18,
        'nome' => "Wall Ferraz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Angra dos Reis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Aperibé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Araruama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Areal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Armação dos Búzios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Arraial do Cabo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Barra do Piraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Barra Mansa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Belford Roxo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Bom Jardim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Bom Jesus do Itabapoana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Cabo Frio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Cachoeiras de Macacu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Cambuci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Campos dos Goytacazes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Cantagalo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Carapebus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Cardoso Moreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Carmo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Casimiro de Abreu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Comendador Levy Gasparian",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Conceição de Macabu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Cordeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Duas Barras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Duque de Caxias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Engenheiro Paulo de Frontin",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Guapimirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Iguaba Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Itaboraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Itaguaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Italva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Itaocara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Itaperuna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Itatiaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Japeri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Laje do Muriaé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Macaé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Macuco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Magé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Mangaratiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Maricá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Mendes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Mesquita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Miguel Pereira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Miracema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Natividade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Nilópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Niterói",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Nova Friburgo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Nova Iguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Paracambi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Paraíba do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Paraty",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Paty do Alferes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Petrópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Pinheiral",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Piraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Porciúncula",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Porto Real",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Quatis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Queimados",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Quissamã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Resende",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Rio Bonito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Rio Claro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Rio das Flores",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Rio das Ostras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Rio de Janeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Santa Maria Madalena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Santo Antônio de Pádua",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "São Fidélis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "São Francisco de Itabapoana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "São Gonçalo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "São João da Barra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "São João de Meriti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "São José de Ubá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "São José do Vale do Rio Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "São Pedro da Aldeia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "São Sebastião do Alto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Sapucaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Saquarema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Seropédica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Silva Jardim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Sumidouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Tanguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Teresópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Trajano de Moraes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Três Rios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Valença",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Varre-Sai",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Vassouras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 19,
        'nome' => "Volta Redonda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Acari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Açu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Afonso Bezerra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Água Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Alexandria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Almino Afonso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Alto do Rodrigues",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Angicos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Antônio Martins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Apodi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Areia Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Arês",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Augusto Severo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Baía Formosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Baraúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Barcelona",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Bento Fernandes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Bodó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Bom Jesus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Brejinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Caiçara do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Caiçara do Rio do Vento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Caicó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Campo Redondo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Canguaretama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Caraúbas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Carnaúba dos Dantas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Carnaubais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Ceará-Mirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Cerro Corá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Coronel Ezequiel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Coronel João Pessoa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Cruzeta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Currais Novos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Doutor Severiano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Encanto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Equador",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Espírito Santo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Extremoz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Felipe Guerra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Fernando Pedroza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Florânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Francisco Dantas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Frutuoso Gomes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Galinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Goianinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Governador Dix-Sept Rosado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Grossos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Guamaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Ielmo Marinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Ipanguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Ipueira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Itajá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Itaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Jaçanã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Jandaíra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Janduís",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Januário Cicco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Japi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Jardim de Angicos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Jardim de Piranhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Jardim do Seridó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "João Câmara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "João Dias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "José da Penha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Jucurutu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Jundiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Lagoa d'Anta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Lagoa de Pedras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Lagoa de Velhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Lagoa Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Lagoa Salgada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Lajes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Lajes Pintadas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Lucrécia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Luís Gomes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Macaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Macau",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Major Sales",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Marcelino Vieira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Martins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Maxaranguape",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Messias Targino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Montanhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Monte Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Monte das Gameleiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Mossoró",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Natal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Nísia Floresta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Nova Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Olho-d'Água do Borges",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Ouro Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Paraná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Paraú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Parazinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Parelhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Parnamirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Passa e Fica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Passagem",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Patu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Pau dos Ferros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Pedra Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Pedra Preta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Pedro Avelino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Pedro Velho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Pendências",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Pilões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Poço Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Portalegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Porto do Mangue",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Presidente Juscelino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Pureza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Rafael Fernandes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Rafael Godeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Riacho da Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Riacho de Santana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Riachuelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Rio do Fogo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Rodolfo Fernandes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Ruy Barbosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Santa Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Santa Maria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Santana do Matos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Santana do Seridó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Santo Antônio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Bento do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Bento do Trairí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Fernando",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Francisco do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Gonçalo do Amarante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São João do Sabugi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São José de Mipibu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São José do Campestre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São José do Seridó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Miguel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Miguel do Gostoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Paulo do Potengi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Pedro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Rafael",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Tomé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "São Vicente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Senador Elói de Souza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Senador Georgino Avelino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Serra de São Bento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Serra do Mel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Serra Negra do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Serrinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Serrinha dos Pintos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Severiano Melo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Sítio Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Taboleiro Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Taipu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Tangará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Tenente Ananias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Tenente Laurentino Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Tibau",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Tibau do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Timbaúba dos Batistas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Touros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Triunfo Potiguar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Umarizal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Upanema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Várzea",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Venha-Ver",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Vera Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Viçosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 20,
        'nome' => "Vila Flor",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Aceguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Água Santa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Agudo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ajuricaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Alecrim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Alegrete",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Alegria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Almirante Tamandaré do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Alpestre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Alto Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Alto Feliz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Alvorada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Amaral Ferrador",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ametista do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "André da Rocha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Anta Gorda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Antônio Prado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Arambaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Araricá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Aratiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Arroio do Meio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Arroio do Padre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Arroio do Sal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Arroio do Tigre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Arroio dos Ratos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Arroio Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Arvorezinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Augusto Pestana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Áurea",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Bagé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Balneário Pinhal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Barão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Barão de Cotegipe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Barão do Triunfo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Barra do Guarita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Barra do Quaraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Barra do Ribeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Barra do Rio Azul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Barra Funda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Barracão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Barros Cassal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Benjamin Constant do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Bento Gonçalves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Boa Vista das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Boa Vista do Buricá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Boa Vista do Cadeado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Boa Vista do Incra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Boa Vista do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Bom Jesus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Bom Princípio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Bom Progresso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Bom Retiro do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Boqueirão do Leão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Bossoroca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Bozano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Braga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Brochier",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Butiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Caçapava do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cacequi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cachoeira do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cachoeirinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cacique Doble",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Caibaté",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Caiçara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Camaquã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Camargo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cambará do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Campestre da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Campina das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Campinas do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Campo Bom",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Campo Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Campos Borges",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Candelária",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cândido Godói",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Candiota",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Canela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Canguçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Canoas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Canudos do Vale",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Capão Bonito do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Capão da Canoa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Capão do Cipó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Capão do Leão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Capela de Santana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Capitão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Capivari do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Caraá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Carazinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Carlos Barbosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Carlos Gomes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Casca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Caseiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Catuípe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Caxias do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Centenário",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cerrito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cerro Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cerro Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cerro Grande do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cerro Largo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Chapada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Charqueadas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Charrua",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Chiapetta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Chuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Chuvisca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cidreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ciríaco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Colinas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Colorado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Condor",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Constantina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Coqueiro Baixo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Coqueiros do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Coronel Barros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Coronel Bicaco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Coronel Pilar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cotiporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Coxilha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Crissiumal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cristal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cristal do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cruz Alta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cruzaltense",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Cruzeiro do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "David Canabarro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Derrubadas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Dezesseis de Novembro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Dilermando de Aguiar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Dois Irmãos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Dois Irmãos das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Dois Lajeados",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Dom Feliciano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Dom Pedrito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Dom Pedro de Alcântara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Dona Francisca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Doutor Maurício Cardoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Doutor Ricardo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Eldorado do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Encantado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Encruzilhada do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Engenho Velho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Entre Rios do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Entre-Ijuís",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Erebango",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Erechim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ernestina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Erval Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Erval Seco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Esmeralda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Esperança do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Espumoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Estação",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Estância Velha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Esteio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Estrela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Estrela Velha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Eugênio de Castro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Fagundes Varela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Farroupilha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Faxinal do Soturno",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Faxinalzinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Fazenda Vilanova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Feliz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Flores da Cunha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Floriano Peixoto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Fontoura Xavier",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Formigueiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Forquetinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Fortaleza dos Valos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Frederico Westphalen",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Garibaldi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Garruchos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Gaurama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "General Câmara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Gentil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Getúlio Vargas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Giruá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Glorinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Gramado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Gramado dos Loureiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Gramado Xavier",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Gravataí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Guabiju",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Guaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Guaporé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Guarani das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Harmonia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Herval",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Herveiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Horizontina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Hulha Negra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Humaitá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ibarama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ibiaçá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ibiraiaras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ibirapuitã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ibirubá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Igrejinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ijuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ilópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Imbé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Imigrante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Independência",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Inhacorá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ipê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ipiranga do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Iraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Itaara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Itacurubi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Itapuca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Itaqui",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Itati",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Itatiba do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ivorá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ivoti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Jaboticaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Jacuizinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Jacutinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Jaguarão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Jaguari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Jaquirana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Jari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Jóia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Júlio de Castilhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Lagoa Bonita do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Lagoa dos Três Cantos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Lagoa Vermelha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Lagoão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Lajeado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Lajeado do Bugre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Lavras do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Liberato Salzano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Lindolfo Collor",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Linha Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Maçambará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Machadinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Mampituba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Manoel Viana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Maquiné",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Maratá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Marau",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Marcelino Ramos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Mariana Pimentel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Mariano Moro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Marques de Souza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Mata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Mato Castelhano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Mato Leitão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Mato Queimado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Maximiliano de Almeida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Minas do Leão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Miraguaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Montauri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Monte Alegre dos Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Monte Belo do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Montenegro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Mormaço",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Morrinhos do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Morro Redondo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Morro Reuter",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Mostardas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Muçum",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Muitos Capões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Muliterno",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Não-Me-Toque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nicolau Vergueiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nonoai",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Alvorada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Araçá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Bassano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Boa Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Bréscia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Candelária",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Esperança do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Hartz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Pádua",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Palma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Petrópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Prata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Ramada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Roma do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Nova Santa Rita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Novo Barreiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Novo Cabrais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Novo Hamburgo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Novo Machado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Novo Tiradentes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Novo Xingu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Osório",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Paim Filho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Palmares do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Palmeira das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Palmitinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Panambi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pantano Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Paraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Paraíso do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pareci Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Parobé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Passa Sete",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Passo do Sobrado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Passo Fundo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Paulo Bento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Paverama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pedras Altas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pedro Osório",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pejuçara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pelotas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Picada Café",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pinhal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pinhal da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pinhal Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pinheirinho do Vale",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pinheiro Machado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pirapó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Piratini",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Planalto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Poço das Antas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pontão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ponte Preta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Portão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Porto Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Porto Lucena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Porto Mauá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Porto Vera Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Porto Xavier",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Pouso Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Presidente Lucena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Progresso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Protásio Alves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Putinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Quaraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Quatro Irmãos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Quevedos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Quinze de Novembro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Redentora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Relvado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Restinga Seca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Rio dos Índios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Rio Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Rio Pardo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Riozinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Roca Sales",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Rodeio Bonito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Rolador",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Rolante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ronda Alta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Rondinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Roque Gonzales",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Rosário do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sagrada Família",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Saldanha Marinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Salto do Jacuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Salvador das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Salvador do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sananduva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santa Bárbara do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santa Cecília do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santa Clara do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santa Cruz do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santa Margarida do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santa Maria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santa Maria do Herval",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santa Rosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santa Tereza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santa Vitória do Palmar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santana da Boa Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sant'Ana do Livramento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santiago",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santo Ângelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santo Antônio da Patrulha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santo Antônio das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santo Antônio do Palma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santo Antônio do Planalto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santo Augusto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santo Cristo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Santo Expedito do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Borja",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Domingos do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Francisco de Assis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Francisco de Paula",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Gabriel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Jerônimo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São João da Urtiga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São João do Polêsine",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Jorge",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São José das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São José do Herval",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São José do Hortêncio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São José do Inhacorá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São José do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São José do Ouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São José do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São José dos Ausentes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Leopoldo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Lourenço do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Luiz Gonzaga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Marcos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Martinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Martinho da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Miguel das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Nicolau",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Paulo das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Pedro da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Pedro das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Pedro do Butiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Pedro do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Sebastião do Caí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Sepé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Valentim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Valentim do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Valério do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Vendelino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "São Vicente do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sapiranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sapucaia do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sarandi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Seberi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sede Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Segredo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Selbach",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Senador Salgado Filho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sentinela do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Serafina Corrêa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sério",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sertão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sertão Santana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sete de Setembro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Severiano de Almeida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Silveira Martins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sinimbu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Sobradinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Soledade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tabaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tapejara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tapera",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tapes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Taquara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Taquari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Taquaruçu do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tavares",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tenente Portela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Terra de Areia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Teutônia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tio Hugo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tiradentes do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Toropi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Torres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tramandaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Travesseiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Três Arroios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Três Cachoeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Três Coroas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Três de Maio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Três Forquilhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Três Palmeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Três Passos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Trindade do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Triunfo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tucunduva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tunas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tupanci do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tupanciretã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tupandi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Tuparendi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Turuçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Ubiretama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "União da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Unistalda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Uruguaiana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vacaria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vale do Sol",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vale Real",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vale Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vanini",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Venâncio Aires",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vera Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Veranópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vespasiano Correa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Viadutos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Viamão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vicente Dutra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Victor Graeff",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vila Flores",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vila Lângaro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vila Maria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vila Nova do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vista Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vista Alegre do Prata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vista Gaúcha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Vitória das Missões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Westfalia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 21,
        'nome' => "Xangri-lá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Alta Floresta D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Alto Alegre dos Parecis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Alto Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Alvorada D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Ariquemes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Buritis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Cabixi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Cacaulândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Cacoal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Campo Novo de Rondônia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Candeias do Jamari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Castanheiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Cerejeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Chupinguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Colorado do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Corumbiara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Costa Marques",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Cujubim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Espigão D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Governador Jorge Teixeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Guajará-Mirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Itapuã do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Jaru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Ji-Paraná",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Machadinho D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Ministro Andreazza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Mirante da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Monte Negro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Nova Brasilândia D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Nova Mamoré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Nova União",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Novo Horizonte do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Ouro Preto do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Parecis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Pimenta Bueno",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Pimenteiras do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Porto Velho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Presidente Médici",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Primavera de Rondônia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Rio Crespo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Rolim de Moura",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Santa Luzia D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "São Felipe D'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "São Francisco do Guaporé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "São Miguel do Guaporé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Seringueiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Teixeirópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Theobroma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Urupá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Vale do Anari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Vale do Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 22,
        'nome' => "Vilhena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Alto Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Amajari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Boa Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Bonfim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Cantá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Caracaraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Caroebe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Iracema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Mucajaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Normandia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Pacaraima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Rorainópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "São João da Baliza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "São Luiz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 23,
        'nome' => "Uiramutã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Abdon Batista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Abelardo Luz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Agrolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Agronômica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Água Doce",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Águas de Chapecó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Águas Frias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Águas Mornas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Alfredo Wagner",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Alto Bela Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Anchieta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Angelina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Anita Garibaldi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Anitápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Antônio Carlos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Apiúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Arabutã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Araquari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Araranguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Armazém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Arroio Trinta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Arvoredo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ascurra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Atalanta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Aurora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Balneário Arroio do Silva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Balneário Barra do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Balneário Camboriú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Balneário Gaivota",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Balneário Piçarras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Bandeirante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Barra Bonita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Barra Velha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Bela Vista do Toldo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Belmonte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Benedito Novo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Biguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Blumenau",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Bocaina do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Bom Jardim da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Bom Jesus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Bom Jesus do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Bom Retiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Bombinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Botuverá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Braço do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Braço do Trombudo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Brunópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Brusque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Caçador",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Caibi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Calmon",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Camboriú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Campo Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Campo Belo do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Campo Erê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Campos Novos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Canelinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Canoinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Capão Alto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Capinzal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Capivari de Baixo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Catanduvas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Caxambu do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Celso Ramos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Cerro Negro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Chapadão do Lageado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Chapecó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Cocal do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Concórdia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Cordilheira Alta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Coronel Freitas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Coronel Martins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Correia Pinto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Corupá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Criciúma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Cunha Porã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Cunhataí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Curitibanos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Descanso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Dionísio Cerqueira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Dona Emma",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Doutor Pedrinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Entre Rios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ermo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Erval Velho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Faxinal dos Guedes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Flor do Sertão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Florianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Formosa do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Forquilhinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Fraiburgo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Frei Rogério",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Galvão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Garopaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Garuva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Gaspar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Governador Celso Ramos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Grão Pará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Gravatal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Guabiruba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Guaraciaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Guaramirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Guarujá do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Guatambú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Herval d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ibiam",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ibicaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ibirama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Içara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ilhota",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Imaruí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Imbituba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Imbuia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Indaial",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Iomerê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ipira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Iporã do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ipuaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ipumirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Iraceminha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Irani",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Irati",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Irineópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Itá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Itaiópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Itajaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Itapema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Itapiranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Itapoá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ituporanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Jaborá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Jacinto Machado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Jaguaruna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Jaraguá do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Jardinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Joaçaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Joinville",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "José Boiteux",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Jupiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Lacerdópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Lages",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Laguna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Lajeado Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Laurentino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Lauro Muller",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Lebon Régis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Leoberto Leal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Lindóia do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Lontras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Luiz Alves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Luzerna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Macieira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Mafra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Major Gercino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Major Vieira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Maracajá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Maravilha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Marema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Massaranduba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Matos Costa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Meleiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Mirim Doce",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Modelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Mondaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Monte Carlo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Monte Castelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Morro da Fumaça",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Morro Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Navegantes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Nova Erechim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Nova Itaberaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Nova Trento",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Nova Veneza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Novo Horizonte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Orleans",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Otacílio Costa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ouro Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Paial",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Painel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Palhoça",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Palma Sola",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Palmeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Palmitos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Papanduva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Passo de Torres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Passos Maia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Paulo Lopes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Pedras Grandes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Penha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Peritiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Petrolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Pinhalzinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Pinheiro Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Piratuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Planalto Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Pomerode",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ponte Alta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ponte Alta do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Ponte Serrada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Porto Belo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Porto União",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Pouso Redondo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Praia Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Presidente Castello Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Presidente Getúlio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Presidente Nereu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Princesa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Quilombo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Rancho Queimado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Rio das Antas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Rio do Campo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Rio do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Rio do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Rio dos Cedros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Rio Fortuna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Rio Negrinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Rio Rufino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Riqueza",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Rodeio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Romelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Salete",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Saltinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Salto Veloso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Sangão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Santa Cecília",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Santa Helena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Santa Rosa de Lima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Santa Rosa do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Santa Terezinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Santa Terezinha do Progresso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Santiago do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Santo Amaro da Imperatriz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Bento do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Bernardino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Bonifácio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Carlos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Cristovão do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Domingos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Francisco do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São João Batista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São João do Itaperiú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São João do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São João do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Joaquim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São José",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São José do Cedro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São José do Cerrito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Lourenço do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Ludgero",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Martinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Miguel da Boa Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Miguel do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "São Pedro de Alcântara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Saudades",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Schroeder",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Seara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Serra Alta",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Siderópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Sombrio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Sul Brasil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Taió",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Tangará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Tigrinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Tijucas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Timbé do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Timbó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Timbó Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Três Barras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Treviso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Treze de Maio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Treze Tílias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Trombudo Central",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Tubarão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Tunápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Turvo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "União do Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Urubici",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Urupema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Urussanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Vargeão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Vargem",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Vargem Bonita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Vidal Ramos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Videira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Vitor Meireles",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Witmarsum",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Xanxerê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Xavantina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Xaxim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 24,
        'nome' => "Zortéa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Adamantina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Adolfo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Aguaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Águas da Prata",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Águas de Lindóia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Águas de Santa Bárbara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Águas de São Pedro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Agudos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Alambari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Alfredo Marcondes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Altair",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Altinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Alto Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Alumínio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Álvares Florence",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Álvares Machado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Álvaro de Carvalho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Alvinlândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Americana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Américo Brasiliense",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Américo de Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Amparo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Analândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Andradina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Angatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Anhembi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Anhumas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Aparecida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Aparecida d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Apiaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Araçariguama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Araçatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Araçoiaba da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Aramina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Arandu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Arapeí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Araraquara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Araras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Arco-Íris",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Arealva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Areias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Areiópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ariranha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Artur Nogueira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Arujá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Aspásia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Assis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Atibaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Auriflama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Avaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Avanhandava",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Avaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bady Bassitt",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Balbinos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bálsamo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bananal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Barão de Antonina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Barbosa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bariri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Barra Bonita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Barra do Chapéu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Barra do Turvo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Barretos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Barrinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Barueri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bastos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Batatais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bauru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bebedouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bento de Abreu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bernardino de Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bertioga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bilac",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Birigui",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Biritiba-Mirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Boa Esperança do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bocaina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bofete",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Boituva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bom Jesus dos Perdões",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bom Sucesso de Itararé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Borá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Boracéia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Borborema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Borebi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Botucatu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Bragança Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Braúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Brejo Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Brodowski",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Brotas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Buri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Buritama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Buritizal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cabrália Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cabreúva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Caçapava",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cachoeira Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Caconde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cafelândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Caiabu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Caieiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Caiuá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cajamar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cajati",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cajobi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cajuru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Campina do Monte Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Campinas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Campo Limpo Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Campos do Jordão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Campos Novos Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cananéia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Canas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cândido Mota",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cândido Rodrigues",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Canitar",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Capão Bonito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Capela do Alto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Capivari",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Caraguatatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Carapicuíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cardoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Casa Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cássia dos Coqueiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Castilho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Catanduva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Catiguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cedral",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cerqueira César",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cerquilho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cesário Lange",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Charqueada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Chavantes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Clementina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Colina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Colômbia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Conchal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Conchas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cordeirópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Coroados",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Coronel Macedo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Corumbataí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cosmópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cosmorama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cotia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cravinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cristais Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cruzália",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cruzeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cubatão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Cunha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Descalvado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Diadema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Dirce Reis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Divinolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Dobrada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Dois Córregos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Dolcinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Dourado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Dracena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Duartina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Dumont",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Echaporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Eldorado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Elias Fausto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Elisiário",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Embaúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Embu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Embu-Guaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Emilianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Engenheiro Coelho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Espírito Santo do Pinhal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Espírito Santo do Turvo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Estiva Gerbi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Estrela do Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Estrela d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Euclides da Cunha Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Fartura",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Fernando Prestes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Fernandópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Fernão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ferraz de Vasconcelos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Flora Rica",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Floreal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Flórida Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Florínia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Franca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Francisco Morato",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Franco da Rocha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Gabriel Monteiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Gália",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Garça",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Gastão Vidigal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Gavião Peixoto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "General Salgado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Getulina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Glicério",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guaiçara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guaimbê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guaíra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guapiaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guapiara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guaraçaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guaraci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guarani d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guarantã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guararapes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guararema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guaratinguetá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guareí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guariba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guarujá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guarulhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guatapará",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Guzolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Herculândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Holambra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Hortolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Iacanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Iacri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Iaras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ibaté",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ibirá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ibirarema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ibitinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ibiúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Icém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Iepê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Igaraçu do Tietê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Igarapava",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Igaratá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Iguape",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ilha Comprida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ilha Solteira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ilhabela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Indaiatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Indiana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Indiaporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Inúbia Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ipaussu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Iperó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ipeúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ipiguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Iporanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ipuã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Iracemápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Irapuã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Irapuru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itaberá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itajobi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itaju",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itanhaém",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itaóca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itapecerica da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itapetininga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itapeva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itapevi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itapira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itapirapuã Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itaporanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itapuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itapura",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itaquaquecetuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itararé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itariri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itatiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itatinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itirapina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itirapuã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itobi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Itupeva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ituverava",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jaborandi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jaboticabal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jacareí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jaci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jacupiranga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jaguariúna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jales",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jambeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jandira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jardinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jarinu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jeriquara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Joanópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "João Ramalho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "José Bonifácio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Júlio Mesquita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jumirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Jundiaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Junqueirópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Juquiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Juquitiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lagoinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Laranjal Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lavínia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lavrinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Leme",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lençóis Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Limeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lindóia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lorena",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lourdes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Louveira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lucélia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lucianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Luís Antônio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Luiziânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lupércio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Lutécia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Macatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Macaubal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Macedônia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Magda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mairinque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mairiporã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Manduri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Marabá Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Maracaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Marapoama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mariápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Marília",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Marinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Martinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Matão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mauá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mendonça",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Meridiano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mesópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Miguelópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mineiros do Tietê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mira Estrela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Miracatu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mirandópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mirante do Paranapanema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mirassol",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mirassolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mococa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mogi das Cruzes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mogi Guaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Moji Mirim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mombuca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Monções",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Mongaguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Monte Alegre do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Monte Alto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Monte Aprazível",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Monte Azul Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Monte Castelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Monte Mor",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Monteiro Lobato",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Morro Agudo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Morungaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Motuca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Murutinga do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nantes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Narandiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Natividade da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nazaré Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Neves Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nhandeara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nipoã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nova Aliança",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nova Campina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nova Canaã Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nova Castilho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nova Europa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nova Granada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nova Guataporanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nova Independência",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nova Luzitânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nova Odessa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Novais",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Novo Horizonte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Nuporanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ocauçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Óleo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Olímpia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Onda Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Oriente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Orindiúva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Orlândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Osasco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Oscar Bressane",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Osvaldo Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ourinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ouro Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ouroeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pacaembu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Palestina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Palmares Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Palmeira d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Palmital",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Panorama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Paraguaçu Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Paraibuna",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Paraíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Paranapanema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Paranapuã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Parapuã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pardinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pariquera-Açu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Parisi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Patrocínio Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Paulicéia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Paulínia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Paulistânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Paulo de Faria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pederneiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pedra Bela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pedranópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pedregulho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pedreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pedrinhas Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pedro de Toledo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Penápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pereira Barreto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pereiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Peruíbe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Piacatu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Piedade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pilar do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pindamonhangaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pindorama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pinhalzinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Piquerobi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Piquete",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Piracaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Piracicaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Piraju",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pirajuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pirangi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pirapora do Bom Jesus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pirapozinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pirassununga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Piratininga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pitangueiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Planalto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Platina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Poá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Poloni",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pompéia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pongaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pontal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pontalinda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pontes Gestal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Populina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Porangaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Porto Feliz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Porto Ferreira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Potim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Potirendaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pracinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pradópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Praia Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Pratânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Presidente Alves",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Presidente Bernardes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Presidente Epitácio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Presidente Prudente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Presidente Venceslau",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Promissão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Quadra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Quatá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Queiroz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Queluz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Quintana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Rafard",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Rancharia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Redenção da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Regente Feijó",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Reginópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Registro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Restinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ribeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ribeirão Bonito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ribeirão Branco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ribeirão Corrente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ribeirão do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ribeirão dos Índios",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ribeirão Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ribeirão Pires",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ribeirão Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Rifaina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Rincão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Rinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Rio Claro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Rio das Pedras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Rio Grande da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Riolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Riversul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Rosana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Roseira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Rubiácea",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Rubinéia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sabino",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sagres",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sales",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sales Oliveira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Salesópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Salmourão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Saltinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Salto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Salto de Pirapora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Salto Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sandovalina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Adélia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Albertina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Bárbara d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Clara d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Cruz da Conceição",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Cruz da Esperança",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Cruz das Palmeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Cruz do Rio Pardo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Ernestina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Fé do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Gertrudes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Isabel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Lúcia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Maria da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Mercedes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Rita do Passa Quatro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Rita d'Oeste",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Rosa de Viterbo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santa Salete",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santana da Ponte Pensa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santana de Parnaíba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santo Anastácio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santo André",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santo Antônio da Alegria",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santo Antônio de Posse",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santo Antônio do Aracanguá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santo Antônio do Jardim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santo Antônio do Pinhal",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santo Expedito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santópolis do Aguapeí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Santos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Bento do Sapucaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Bernardo do Campo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Caetano do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Carlos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Francisco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São João da Boa Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São João das Duas Pontes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São João de Iracema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São João do Pau d'Alho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Joaquim da Barra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São José da Bela Vista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São José do Barreiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São José do Rio Pardo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São José do Rio Preto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São José dos Campos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Lourenço da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Luís do Paraitinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Manuel",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Miguel Arcanjo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Paulo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Pedro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Pedro do Turvo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Roque",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Sebastião",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Sebastião da Grama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Simão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "São Vicente",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sarapuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sarutaiá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sebastianópolis do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Serra Azul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Serra Negra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Serrana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sertãozinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sete Barras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Severínia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Silveiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Socorro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sorocaba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sud Mennucci",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Sumaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Suzanápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Suzano",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tabapuã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tabatinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Taboão da Serra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Taciba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Taguaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Taiaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Taiúva",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tambaú",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tanabi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tapiraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tapiratiba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Taquaral",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Taquaritinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Taquarituba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Taquarivaí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tarabai",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tarumã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tatuí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Taubaté",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tejupá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Teodoro Sampaio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Terra Roxa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tietê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Timburi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Torre de Pedra",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Torrinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Trabiju",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tremembé",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Três Fronteiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tuiuti",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tupã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Tupi Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Turiúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Turmalina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ubarana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ubatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Ubirajara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Uchoa",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "União Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Urânia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Uru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Urupês",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Valentim Gentil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Valinhos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Valparaíso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Vargem",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Vargem Grande do Sul",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Vargem Grande Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Várzea Paulista",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Vera Cruz",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Vinhedo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Viradouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Vista Alegre do Alto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Vitória Brasil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Votorantim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Votuporanga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 25,
        'nome' => "Zacarias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Amparo de São Francisco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Aquidabã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Aracaju",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Arauá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Areia Branca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Barra dos Coqueiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Boquim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Brejo Grande",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Campo do Brito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Canhoba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Canindé de São Francisco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Capela",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Carira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Carmópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Cedro de São João",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Cristinápolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Cumbe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Divina Pastora",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Estância",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Feira Nova",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Frei Paulo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Gararu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "General Maynard",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Gracho Cardoso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Ilha das Flores",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Indiaroba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Itabaiana",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Itabaianinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Itabi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Itaporanga d'Ajuda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Japaratuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Japoatã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Lagarto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Laranjeiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Macambira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Malhada dos Bois",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Malhador",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Maruim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Moita Bonita",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Monte Alegre de Sergipe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Muribeca",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Neópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Nossa Senhora Aparecida",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Nossa Senhora da Glória",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Nossa Senhora das Dores",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Nossa Senhora de Lourdes",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Nossa Senhora do Socorro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Pacatuba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Pedra Mole",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Pedrinhas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Pinhão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Pirambu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Poço Redondo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Poço Verde",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Porto da Folha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Propriá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Riachão do Dantas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Riachuelo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Ribeirópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Rosário do Catete",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Salgado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Santa Luzia do Itanhy",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Santa Rosa de Lima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Santana do São Francisco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Santo Amaro das Brotas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "São Cristóvão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "São Domingos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "São Francisco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "São Miguel do Aleixo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Simão Dias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Siriri",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Telha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Tobias Barreto",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Tomar do Geru",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 26,
        'nome' => "Umbaúba",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Abreulândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Aguiarnópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Aliança do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Almas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Alvorada",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Ananás",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Angico",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Aparecida do Rio Negro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Aragominas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Araguacema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Araguaçu",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Araguaína",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Araguanã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Araguatins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Arapoema",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Arraias",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Augustinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Aurora do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Axixá do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Babaçulândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Bandeirantes do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Barra do Ouro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Barrolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Bernardo Sayão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Bom Jesus do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Brasilândia do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Brejinho de Nazaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Buriti do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Cachoeirinha",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Campos Lindos",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Cariri do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Carmolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Carrasco Bonito",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Caseara",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Centenário",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Chapada da Natividade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Chapada de Areia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Colinas do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Colméia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Combinado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Conceição do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Couto Magalhães",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Cristalândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Crixás do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Darcinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Dianópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Divinópolis do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Dois Irmãos do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Dueré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Esperantina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Fátima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Figueirópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Filadélfia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Formoso do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Fortaleza do Tabocão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Goianorte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Goiatins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Guaraí",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Gurupi",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Ipueiras",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Itacajá",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Itaguatins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Itapiratins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Itaporã do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Jaú do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Juarina",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Lagoa da Confusão",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Lagoa do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Lajeado",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Lavandeira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Lizarda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Luzinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Marianópolis do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Mateiros",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Maurilândia do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Miracema do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Miranorte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Monte do Carmo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Monte Santo do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Muricilândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Natividade",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Nazaré",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Nova Olinda",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Nova Rosalândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Novo Acordo",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Novo Alegre",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Novo Jardim",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Oliveira de Fátima",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Palmas",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Palmeirante",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Palmeiras do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Palmeirópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Paraíso do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Paranã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Pau D'Arco",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Pedro Afonso",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Peixe",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Pequizeiro",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Pindorama do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Piraquê",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Pium",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Ponte Alta do Bom Jesus",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Ponte Alta do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Porto Alegre do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Porto Nacional",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Praia Norte",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Presidente Kennedy",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Pugmil",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Recursolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Riachinho",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Rio da Conceição",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Rio dos Bois",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Rio Sono",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Sampaio",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Sandolândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Santa Fé do Araguaia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Santa Maria do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Santa Rita do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Santa Rosa do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Santa Tereza do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Santa Terezinha do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "São Bento do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "São Félix do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "São Miguel do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "São Salvador do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "São Sebastião do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "São Valério",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Silvanópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Sítio Novo do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Sucupira",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Taguatinga",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Taipas do Tocantins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Talismã",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Tocantínia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Tocantinópolis",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Tupirama",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Tupiratins",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Wanderlândia",
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'estado_id' => 27,
        'nome' => "Xambioá",
        'created_at' => $now,
        'updated_at' => $now
      ],
    ]);
  }
}
