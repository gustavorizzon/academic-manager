<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('matriculas', function (Blueprint $table) {
      $table->id();

      $table->integer('membro_instituicao_id')->unsigned();
      $table->foreign('membro_instituicao_id')->references('id')->on('membros_instituicao');

      $table->integer('curso_id')->unsigned();
      $table->foreign('curso_id')->references('id')->on('cursos');

      $table->char('status', 1)->default('M');

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
    Schema::dropIfExists('matriculas');
  }
}
