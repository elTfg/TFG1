<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_proyecto',50)->nullable($value=false);
            $table->longText('descripcion_larga')->nullable();
            $table->text('descripcion_corta');
            $table->string('nombre_cliente')->nullable();
            $table->date('fecha_inicio_prevista');
            $table->date('fecha_fin_prevista');
            $table->enum('estado', ['no_iniciado', 'iniciado', 'pausado', 'finalizado'])->default('no_iniciado');
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
        Schema::dropIfExists('proyecto');
    }
}
