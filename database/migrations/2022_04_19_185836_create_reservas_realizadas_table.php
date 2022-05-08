<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas_realizadas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_alojamiento')->unsigned();
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->string('estado', 20);

            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('id_alojamiento')->references('id')->on('alojamientos')->onDelete('cascade')->onUpdate("cascade");
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
        Schema::dropIfExists('reservas_realizadas');
    }
};
