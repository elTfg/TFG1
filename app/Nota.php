<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
       
    protected $table = 'nota';
    protected $fillable = [
        'nombre_nota','contenido'
   ];

    public function usuarios()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
}
