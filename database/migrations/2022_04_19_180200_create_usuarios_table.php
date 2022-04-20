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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 20);
            $table->string('apellidos', 30)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('dni', 9)->unique()->nullable();
            $table->string('email', 50)->unique();
            $table->string('password', 20);
            $table->integer('telefono')->nullable();
            $table->string('rol', 20);
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
        Schema::dropIfExists('usuarios');
    }
};
