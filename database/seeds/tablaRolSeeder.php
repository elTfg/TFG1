<?php

use Carbon\Carbon; //Esta libreria sirve para añadir timestamps del momento (fechas) en el formato indicado.
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Rol;
use App\Permiso;

class tablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$roles = [
            'MASTER' => 'El superusuario de la aplicacion, tiene acceso total a la bbdd',
            'FINAL_BOSS' => 'Por debajo de Master pero con la capacidad de crear proyectos y gestionarlos en su totalidad',
            'PROJECT_MASTER' => 'El MAESTRO DE PROYECTOS, tiene la capacidad de gestionar de los proyectos ya creados, sus usuario y las tareas del proyecto.',
            'TASK_MASTER' => 'El MAESTRO DE TAREAS, tiene la capacidad de añadir, modificar y finalizar tareas (NO BORRAR) de los proyectos ya creados.',
            'USER' => 'El usuario, solo puede gestionar las tareas creadas por el o en la que este participando en ese momento (Iniciar, pausar y finalizar)'
        ];
        foreach($roles as $key => $value){

                DB::table('rol')->insert([
                    'nombre_rol' => $key,
                    'descripcion_rol' => $value,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);

        };*/

        

        $rolAdministrador = new Rol();
        $rolAdministrador->nombre_rol="Administrador";
        $rolAdministrador->slug="administrador";
        $rolAdministrador->descripcion_rol="SuperUsuario con todos los permisos";
        $rolAdministrador->save();

        $rolSupervisor = new Rol();
        $rolSupervisor->nombre_rol="supervisor";
        $rolSupervisor->slug="supervisor";
        $rolSupervisor->descripcion_rol="Todos los permisos salvo los relacionados con la creacion y eliminacion de usuarios y proyectos";
        $rolSupervisor->save();
        
        $rolTrusted = new Rol();
        $rolTrusted->nombre_rol="usuario-confianza";
        $rolTrusted->slug="usuario-confianza";
        $rolTrusted->descripcion_rol="Usuario especial capaz de asignar tareas a otros usuarios";
        $rolTrusted->save();

        $rolUsuario = new Rol();
        $rolUsuario->nombre_rol="usuario";
        $rolUsuario->slug="usuario";
        $rolUsuario->descripcion_rol="Usuario base nada especial";
        $rolUsuario->save();

        $rolVisitante = new Rol();
        $rolVisitante->nombre_rol="visitante";
        $rolVisitante->slug="visitante";
        $rolVisitante->descripcion_rol="visitante, aquellos usuarios que no trabajan en un proyecto ";
        $rolVisitante->save();




    }
}
