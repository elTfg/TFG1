<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTarea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarea', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tarea', 50)->nullable($value= false);
            $table->text('descripcion_tarea');
            $table->timestamps();
            $table->unsignedSmallInteger('n_horas_asignadas');
            $table->enum('estado', ['no_iniciada', 'iniciada', 'pausada', 'finalizada'])->default('no_iniciada');
            $table->timestamp('empezada_el')->nullable();
            $table->timestamp('finalizada_el')->nullable();
            $table->foreignId('proyecto_id');


            $table->foreign('proyecto_id', 'fk_proyecto_tarea')->references('id')->on('proyecto')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarea');
    }
}
