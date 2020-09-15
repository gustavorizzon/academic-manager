<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bancas', function (Blueprint $table) {
            $table->id();

            $table->text('descricao');
            $table->string('periodo_letivo');
            $table->boolean('status');
            $table->smallInteger('total_vagas');
            $table->string('sala');

            $table->integer('disciplinas_curso_id')->unsigned();
            $table->foreign('disciplinas_curso_id')->references('id')->on('disciplinas_curso');

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
        Schema::dropIfExists('bancas');
    }
}
