<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_proyecto_rol', function (Blueprint $table) {
            $table->foreignId('id_usuario');
            $table->foreignId('id_proyecto');
            $table->foreign('id_usuario', 'fk_usuario_proyecto')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('id_proyecto', 'fk_proyecto_usuario')->references('id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('usuario_proyecto');
    }
}
