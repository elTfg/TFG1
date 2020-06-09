<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'permiso';

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'rol_permiso', 'permiso_id', 'rol_id');
    }

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'usuario_permiso','usuario_id', 'permiso_id');
    }
}



