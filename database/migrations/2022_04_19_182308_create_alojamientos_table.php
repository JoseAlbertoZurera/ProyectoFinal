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
            $table->string('ciudad', 20);
            $table->integer('codigo_postal');
            $table->string('direccion', 40);
            $table->string('tipo_alojamiento', 20);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('precio_noche');
            $table->boolean('disponibilidad');
            $table->integer('id_usuario')->unsigned();
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate("cascade");
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
