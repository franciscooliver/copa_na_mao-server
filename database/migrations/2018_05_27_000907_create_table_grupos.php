<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGrupos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_grupo');
            $table->string('cam_img1');
            $table->string('cam_img2');
            $table->string('cam_img3');
            $table->string('cam_img4');
            $table->string('nome_selecao1');
            $table->string('nome_selecao2');
            $table->string('nome_selecao3');
            $table->string('nome_selecao4');
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
        Schema::dropIfExists('grupos');
    }
}
