<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agendamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_servico')->unsigned();
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('endereco');
            $table->date('data');
            $table->string('hora');
            $table->timestamps();

            $table->foreign('id_servico')->references('id')->on('servicos');
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
