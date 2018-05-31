<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDadosSelecoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_selecoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pontos_sel1');
            $table->integer('pontos_sel2');
            $table->integer('pontos_sel3');
            $table->integer('pontos_sel4');
            $table->integer('vitorias_sel1');
            $table->integer('vitorias_sel2');
            $table->integer('vitorias_sel3');
            $table->integer('vitorias_sel4');
            $table->integer('empates_sel1');
            $table->integer('empates_sel2');
            $table->integer('empates_sel3');
            $table->integer('empates_sel4');
            $table->integer('derrotas_sel1');
            $table->integer('derrotas_sel2');
            $table->integer('derrotas_sel3');
            $table->integer('derrotas_sel4');
            $table->integer('fk_grupo')->unsigned();
            $table->foreign('fk_grupo')->references('id')->on('grupos');
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
        Schema::dropIfExists('dados_selecoes');
    }
}
