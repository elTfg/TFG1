<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPermisoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->id();
            $table->foreignId('permiso_id');
            $table->foreignId('rol_id');
            $table->foreign('permiso_id', 'fk_permiso_rol')->references('id')->on('permiso')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('rol_id', 'fk_rol_permiso')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('permiso_rol');
    }
}
