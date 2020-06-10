<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apodo', 50)->nullable($value = true)->unique();
            $table->string('email', 190)->unique();
            $table->timestamp('email_verificado_el')->nullable();            
            $table->string('password', 100);
            $table->rememberToken(); // este campo sirve como baliza para que se almacenen los datos de sesion para mantenerla abierta
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
        Schema::dropIfExists('usuario');
    }
}
