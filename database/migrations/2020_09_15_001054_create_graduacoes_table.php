<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduacoes', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->bigInteger('numero_titulo');

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
        Schema::dropIfExists('graduacoes');
    }
}
