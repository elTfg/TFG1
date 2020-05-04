<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProyectoTarea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_tarea', function (Blueprint $table) {
            $table->foreignId('id_proyecto');
            $table->foreignId('id_tarea');
            $table->enum('prioridad', ['0','1','2','3','4','5'])->default('0');
            $table->foreign('id_proyecto', 'fk_proyecto_tarea')->references('id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('id_tarea', 'fk_tarea_proyecto')->references('id')->on('tarea')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('proyecto_tarea');
    }
}
