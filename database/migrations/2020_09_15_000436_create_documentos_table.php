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
            $table->string('extensao_arquivo');
            $table->string('tipo_mime');

            $table->integer('banca_id')->unsigned();
            $table->foreign('banca_id')->references('id')->on('bancas');

            $table->integer('membro_banca_id')->unsigned();
            $table->foreign('membro_banca_id')->references('id')->on('membros_banca');

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
