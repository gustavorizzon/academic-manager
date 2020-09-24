<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrequenciasMembroBancaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencias_membro_banca', function (Blueprint $table) {
            $table->id();

            $table->boolean('presente');

            $table->integer('membro_banca_id')->unsigned();
            $table->foreign('membro_banca_id')->references('id')->on('membros_banca');

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
        Schema::dropIfExists('frequencias_membro_banca');
    }
}
