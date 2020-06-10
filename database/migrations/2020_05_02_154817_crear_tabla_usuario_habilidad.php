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
            $table->foreignId('usuario_id');
            $table->foreignId('habilidad_id');

            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('habilidad_id')->references('id')->on('habilidad')->onDelete('restrict')->onUpdate('restrict');
            
            
            $table->primary(['usuario_id','habilidad_id']);

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
