<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembrosBancaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros_banca', function (Blueprint $table) {
            $table->id();

            $table->integer('membro_instituicao_id')->unsigned();
            $table->foreign('membro_instituicao_id')->references('id')->on('membros_instituicao');

            $table->integer('banca_id')->unsigned();
            $table->foreign('banca_id')->references('id')->on('bancas');

            $table->smallInteger('creditos');
            $table->boolean('status');

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
        Schema::dropIfExists('membros_banca');
    }
}
