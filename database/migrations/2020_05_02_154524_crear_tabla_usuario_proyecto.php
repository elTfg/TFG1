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
            $table->foreignId('usuario_id');
            $table->foreignId('proyecto_id');

            $table->foreign('usuario_id', 'fk_usuario_proyecto')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('proyecto_id', 'fk_proyecto_usuario')->references('id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');

            $table->primary(['usuario_id','proyecto_id']);
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
