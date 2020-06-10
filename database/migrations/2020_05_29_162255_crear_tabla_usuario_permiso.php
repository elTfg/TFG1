<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioPermiso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_permiso', function (Blueprint $table) {
            $table->foreignId('usuario_id');
            $table->foreignId('permiso_id');

            $table->foreign('usuario_id', 'fk_usuario_permiso')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('permiso_id', 'fk_permiso_usuario')->references('id')->on('permiso')->onDelete('cascade')->onUpdate('cascade');

            $table->primary(['usuario_id','permiso_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_permiso');
    }
}
