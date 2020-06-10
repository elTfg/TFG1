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
            $table->foreignId('usuario_id');
            $table->foreignId('tarea_id');

            $table->enum('estado', ['no_iniciada', 'iniciada', 'pausada', 'finalizada'])->default('no_iniciada');
            $table->date('iniciada_el');
            $table->date('finalizada_el');

            $table->foreign('usuario_id', 'fk_usuario_tarea')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('tarea_id', 'fk_tarea_usuario')->references('id')->on('tarea')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();

            $table->primary(['usuario_id','tarea_id']);
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
