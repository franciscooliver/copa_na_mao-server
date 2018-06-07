<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDadosFaseOne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dadosFasesOnes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_sel1');
            $table->string('img_sel2');
            $table->string('img_sel3');
            $table->string('img_sel4');
            $table->string('nome_sel1');
            $table->string('nome_sel2');
            $table->string('nome_sel3');
            $table->string('nome_sel4');
            $table->string('data_partida1');
            $table->string('data_partida2');
            $table->string('horario_partida1');
            $table->string('horario_partida2');
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
        Schema::dropIfExists('dadosFasesOnes');
    }
}
