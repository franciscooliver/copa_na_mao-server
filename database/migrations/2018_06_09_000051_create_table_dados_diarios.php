<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDadosDiarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dado_diarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url_img1',250);
            $table->string('url_img2',250);
            $table->string('text1');
            $table->string('text2');
            $table->string('hora_partida');
            $table->string('data');
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
        Schema::dropIfExists('dadosDiarios');
    }
}
