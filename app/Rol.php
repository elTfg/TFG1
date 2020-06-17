<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    
    protected $table = 'rol';
    protected $fillable = [
        'nombre_rol', 'slug', 'descripcion_rol',
    ];

    public function permisos()
    {
        return $this->belongsToMany(Permiso::class, 'rol_permiso', 'rol_id', 'permiso_id');
    }

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'usuario_rol', 'rol_id', 'usuario_id');
    }
}
