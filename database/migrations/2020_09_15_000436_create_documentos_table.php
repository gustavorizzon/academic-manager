<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->date('data');
            $table->string('nome_arquivo');
            $table->string('nome_arquivo_salvo');
            $table->string('tamanho_arquivo');

            $table->integer('banca_id')->unsigned();
            $table->foreign('banca_id')->references('id')->on('bancas');

            $table->integer('membro_instituicao_id')->unsigned();
            $table->foreign('membro_instituicao_id')->references('id')->on('membros_instituicao');

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
        Schema::dropIfExists('documentos');
    }
}
