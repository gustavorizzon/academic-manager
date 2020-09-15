<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id('matricula');

            $table->string('nome');
            $table->date('data_nascimento');
            $table->char('orientacao_sexual');
            $table->char('estado_civil');
            $table->string('cpf');
            $table->string('rg');

            $table->string('nome_mae');
            $table->string('nome_pai');

            $table->string('telefone');
            $table->string('email');

            $table->string('rua');
            $table->smallInteger('numero_rua');
            $table->string('complemento')->nullable();
            $table->string('referencia')->nullable();
            $table->string('bairro');

            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('id')->on('cidades');

            $table->string('login');
            $table->string('senha');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
