<?php
namespace App\Permisos;

use App\Permiso;
use App\Rol;

trait TienePermisosTrait{

    
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuario_rol');
    }

    public function permisos()
    {
        return $this->belongsToMany(Permiso::class, 'usuario_permiso');
    }

    public function tieneRol(... $roles)
    {
        foreach ($roles as $rol){
            if ($this->roles->contains('slug', $rol)){
                return true;
            }
        }
        return false;
    }

    protected function tienePermisos($permiso){

        return (bool) $this->permisos->where('slug', $permiso->slug)->count();
    }

    protected function tienePermisosPara($permiso)
    {
        return $this->tienePermisosATravesDeRol($permiso) || $this->tienePermisos($permiso);
    }

    public function tienePermisosATravesDeRol($permiso)
    {
        foreach ($permiso->roles as $rol){

            if($this->roles->contains($rol)){
                return true;
            };
        }
        return false;
    }

    protected function getPermisos(array $permisos){

        return Permiso::whereIn('slug', $permisos)->get();
    }
    
    public function darPermisosA(... $permisos) 
    {
        $permisos = $this->getPermisos($permisos);
        if($permisos ===null){
            
            return $this;
        }
        $this->permisos()->saveMany($permisos);
        return $this;        
    }

    public function removerPermisos(... $permisos)
    {
        $permisos = $this->getPermisos($permisos);
        $this->permisos()->detach($permisos);
        return $this;
    }

    public function actualizarPermisos(... $permisos)
    {
        $this->permisos()->detach();
        return $this->darPermisosA($permisos);

    }  
}
