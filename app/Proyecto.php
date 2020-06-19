<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyecto';
    protected $fillable = [
        'titulo_proyecto','descripcion_larga', 'descripcion_corta','nombre_cliente', 'fecha_inicio_prevista','fecha_fin_prevista','usuario_id'
   ];

   public function usuarios()
   {
       return $this->hasMany(User::class, 'usuario_id');
   }

   public function tareas()
   {
       return $this->hasMany(Tarea::class);
   }


}
