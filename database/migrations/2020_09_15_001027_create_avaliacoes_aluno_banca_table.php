<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacoesAlunoBancaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes_aluno_banca', function (Blueprint $table) {
            $table->id();

            $table->decimal('nota', 3, 1, true);

            $table->integer('aluno_banca_id')->unsigned();
            $table->foreign('aluno_banca_id')->references('id')->on('alunos_banca');

            $table->integer('avaliacao_id')->unsigned();
            $table->foreign('avaliacao_id')->references('id')->on('avaliacoes');

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
        Schema::dropIfExists('avaliacoes_aluno_banca');
    }
}
