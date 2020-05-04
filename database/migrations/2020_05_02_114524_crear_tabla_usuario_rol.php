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
            $table->foreignId('id_usuario');
            $table->foreignId('id_rol');
            $table->boolean('estado');
            $table->foreign('id_usuario', 'fk_usuario_rol')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('id_rol', 'fk_rol_usuario')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('usuario_rol');
    }
}
