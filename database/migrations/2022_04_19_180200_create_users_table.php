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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 40);
            $table->string('apellidos', 30)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('dni', 9)->unique()->nullable();
            $table->string('email', 50)->unique();
            $table->string('password', 200);
            $table->string('telefono', 20)->nullable();
            $table->string('ruta_imagen')->nullable();
            $table->string('rol', 20);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
