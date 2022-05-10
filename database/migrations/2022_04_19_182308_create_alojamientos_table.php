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
        Schema::create('alojamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ciudad', 50);
            $table->integer('codigo_postal');
            $table->string('direccion', 80);
            $table->string('tipo_alojamiento', 20);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('precio_noche');
            $table->boolean('disponibilidad');
            $table->text('descripcion');
            $table->string('ruta_imagen');
            $table->boolean('wifi');
            $table->boolean('playa');
            $table->boolean('limpieza');
            $table->boolean('mascotas');
            $table->boolean('estacionamiento');
            $table->boolean('aire_acondicionado');
            $table->integer('habitaciones');
            $table->integer('max_personas');
            $table->integer('id_usuario')->unsigned();
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alojamientos');
    }
};
