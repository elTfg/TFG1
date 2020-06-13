<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tarea';
    protected $fillable = [
        'nombre_tarea','descripcion_tarea','fecha_inicio_prevista','fecha_fin_prevista'
   ];

    public function proyectos()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id');
    }
 

}
