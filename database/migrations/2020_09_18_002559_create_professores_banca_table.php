<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessoresBancaTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('professores_banca', function (Blueprint $table) {
      $table->id();

      $table->integer('professor_matricula')->unsigned();
      $table->foreign('professor_matricula')->references('matricula')->on('professores');

      $table->integer('banca_id')->unsigned();
      $table->foreign('banca_id')->references('id')->on('bancas');

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
    Schema::dropIfExists('professores_banca');
  }
}
