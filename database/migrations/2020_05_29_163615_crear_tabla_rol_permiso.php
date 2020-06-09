<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaRolPermiso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_permiso', function (Blueprint $table) {
            $table->foreignId('permiso_id');
            $table->foreignId('rol_id');
            //Seteo los campos y despues asigno las claves foraneas.
            $table->foreign('permiso_id', 'fk_permiso_rol')->references('id')->on('permiso')->onDelete('cascade');
            $table->foreign('rol_id', 'fk_rol_permiso')->references('id')->on('rol')->onDelete('cascade');

            $table->primary(['permiso_id','rol_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_permiso');
    }
}
