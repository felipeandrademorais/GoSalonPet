<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Servicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_raca')->unsigned();
            $table->string('nome');
            $table->string('descricao');
            $table->double('preco');
            $table->integer('tempo');
            $table->string('unidade_tempo');
            $table->timestamps();

            $table->foreign('id_raca')->references('id')->on('racas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicos');
    }
}
