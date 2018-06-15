<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFaseOitavas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fases_oitavas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('data');
            $table->string('horario');
            $table->string('url_img1');
            $table->string('url_img2');
            $table->string('nome_sel1');
            $table->string('nome_sel2');

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
        Schema::dropIfExists('fases_oitavas');
    }
}
