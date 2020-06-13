<?php

namespace App\Http\Controllers;

use App\Permiso;
use App\Rol;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\NotIn;

class PermisoController extends Controller
{
    public function Permiso()
    {

        $rolAdministrador = Rol::where('slug', 'administrador')->first();
        $rolSupervisor = Rol::where('slug', 'supervisor')->first();
        $rolTrusted = Rol::where('slug', 'usuario-confianza')->first(); 
        $rolUsuario = Rol::where('slug', 'usuario')->first();
        $rolVisitante = Rol::where('slug', 'visitante')->first();

        $todosPermiso = DB::table('permiso')->pluck('id');

        foreach($todosPermiso as $permiso){

            $rolAdministrador->permisos()->attach($permiso);
        }
        
        $permisosSupervisor = Permiso::where([
            ['slug', 'not like', 'crear-usu%'],
            ['slug', 'not like', 'editar-usu%'],
            ['slug', 'not like', 'eliminar-pro%'],   
        ])->get();

        foreach($permisosSupervisor as $permiso){
            $rolSupervisor->permisos()->attach($permiso);
        }

        $permisosTrusted = Permiso::whereIn('id',[3,7,8,9,10,11,12,13,14,15,16,21,27,32])->get();
        foreach($permisosTrusted as $permiso){
            $rolTrusted->permisos()->attach($permiso);
        }

        $permisosUsuario = Permiso::whereIn('id',[3,8,9,13,14,15,16,21,27,32])->get();
        foreach($permisosUsuario as $permiso){
            $rolUsuario->permisos()->attach($permiso);
        }

        $permisosVisitante = Permiso::where('slug', 'like', 'ver%')->get();
        foreach($permisosVisitante as $permiso){
            $rolVisitante->permisos()->attach($permiso);
        }

        $usuario1 = New User();
        $usuario1->nombre = 'root';
        $usuario1->email = 'root@proyectate.com';
        $usuario1->password = bcrypt('1234');
        $usuario1->save();
        $usuario1->roles()->attach($rolAdministrador);

        $usuario2 = New User();
        $usuario2->nombre = 'supervisor';
        $usuario2->email = 'supervisor@proyectate.com';
        $usuario2->password = bcrypt('1234');
        $usuario2->save();
        $usuario2->roles()->attach($rolSupervisor);

        $usuario3 = New User();
        $usuario3->nombre = 'trusted User';
        $usuario3->email = 'trusted@proyectate.com';
        $usuario3->password = bcrypt('1234');
        $usuario3->save();
        $usuario3->roles()->attach($rolTrusted);

        $usuario4 = New User();
        $usuario4->nombre = 'paco';
        $usuario4->email = 'paco@proyectate.com';
        $usuario4->password = bcrypt('1234');
        $usuario4->save();
        $usuario4->roles()->attach($rolUsuario);

        $usuario5 = New User();
        $usuario5->nombre = 'visitante';
        $usuario5->email = 'visitante@proyectate.com';
        $usuario5->password = bcrypt('1234');
        $usuario5->save();
        $usuario5->roles()->attach($rolVisitante);

        
        return redirect()->back();
    }

}
