<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaNota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            
            $table->id();
            $table->string('nombre_nota');
            $table->longText('contenido');
            $table->foreignId('usuario_id');
        
            $table->foreign('usuario_id', 'fk_usuario_notas')->references('id')->on('usuario')->onDelete('cascade');
        });
        
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota');
    }
}
