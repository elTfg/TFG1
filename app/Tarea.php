<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tarea';
    protected $fillable = [
        'nombre_tarea','descripcion_tarea','n_horas_asignadas','estado'
   ];

    public function proyectos()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id');
    }
 

}
