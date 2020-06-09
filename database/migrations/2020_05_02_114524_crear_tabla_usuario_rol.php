<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            
            $table->foreignId('usuario_id');
            $table->foreignId('rol_id');
            //Seteo los campos y despues asigno las claves foraneas.
            $table->foreign('usuario_id', 'fk_usuario_rol')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('rol_id', 'fk_rol_usuario')->references('id')->on('rol')->onDelete('cascade');

            $table->primary(['usuario_id','rol_id']);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_rol');
    }
}
