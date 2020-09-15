<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrequenciasAlunoBancaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencias_aluno_banca', function (Blueprint $table) {
            $table->id();

            $table->boolean('presente');

            $table->integer('aluno_banca_id')->unsigned();
            $table->foreign('aluno_banca_id')->references('id')->on('alunos_banca');

            $table->integer('frequencia_id')->unsigned();
            $table->foreign('frequencia_id')->references('id')->on('frequencias');

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
        Schema::dropIfExists('frequencias_aluno_banca');
    }
}
