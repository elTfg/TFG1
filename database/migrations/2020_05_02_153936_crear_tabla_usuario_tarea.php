<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsuarioTarea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_tarea', function (Blueprint $table) {
            $table->foreignId('id_usuario');
            $table->foreignId('id_tarea');
            $table->enum('estado', ['no_iniciada', 'iniciada', 'pausada', 'finalizada'])->default('no_iniciada');
            $table->date('iniciada_el');
            $table->date('finalizada_el');
            $table->foreign('id_usuario', 'fk_usuario_tarea')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('id_tarea', 'fk_tarea_usuario')->references('id')->on('tarea')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('usuario_tarea');
    }
}
