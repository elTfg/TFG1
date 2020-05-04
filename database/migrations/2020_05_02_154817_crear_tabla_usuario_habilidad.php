<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioHabilidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_habilidad', function (Blueprint $table) {
            $table->foreignId('id_usuario');
            $table->foreignId('id_habilidad');
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('id_habilidad')->references('id')->on('habilidad')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('usuario_habilidad');
    }
}
