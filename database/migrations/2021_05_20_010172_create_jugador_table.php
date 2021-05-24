<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugador', function (Blueprint $table) {
            $table->id('idJugador');
            $table->string('nombre', 50);
            $table->string('posicion', 50);
            $table->unsignedBigInteger('idClub');
            $table->unsignedBigInteger('idPais');
            $table->foreign('idClub')->references('idClub')->on('club');
            $table->foreign('idPais')->references('idPais')->on('pais');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugador');
    }
}
