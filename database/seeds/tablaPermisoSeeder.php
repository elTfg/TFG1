<?php

use Illuminate\Database\Seeder;
use App\Permiso;
use App\Rol;

class tablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $crearUsuario = new Permiso();
        $crearUsuario->slug = 'crear-usuario';
        $crearUsuario->nombre_permiso = 'crear usuario';
        $crearUsuario->save();

        $editarUsuario = new Permiso();
        $editarUsuario->nombre_permiso = 'editar usuario';
        $editarUsuario->slug = 'editar-usuario';
        $editarUsuario->save();

        $verUsuarios = new Permiso();
        $verUsuarios->nombre_permiso = 'ver usuario';
        $verUsuarios->slug = 'ver-usuario';
        $verUsuarios->save();

        $eliminarUsuario = new Permiso();
        $eliminarUsuario->nombre_permiso = 'eliminar usuario';
        $eliminarUsuario->slug = 'eliminar-usuario';
        $eliminarUsuario->save();

        $asignarUsuario = new Permiso();
        $asignarUsuario->nombre_permiso = 'asignar usuario';
        $asignarUsuario->slug = 'asignar-usuario';
        $asignarUsuario->save();

        $quitarUsuario = new Permiso();
        $quitarUsuario->nombre_permiso = 'quitar usuario';
        $quitarUsuario->slug = 'quitar-usuario';
        $quitarUsuario->save();

        /* CRUD USUARIOS */

        $crearTarea = new Permiso();
        $crearTarea->nombre_permiso = 'crear tarea';
        $crearTarea->slug = 'crear-tarea';
        $crearTarea->save();

        $editarTarea = new Permiso();
        $editarTarea->nombre_permiso = 'editar tarea';
        $editarTarea->slug = 'editar-tarea';
        $editarTarea->save();
        
        $verTarea = new Permiso();
        $verTarea->nombre_permiso = 'ver tarea';
        $verTarea->slug = 'ver-tarea';
        $verTarea->save();

        $eliminarTarea = new Permiso();
        $eliminarTarea->nombre_permiso = 'eliminar tarea';
        $eliminarTarea->slug = 'eliminar-tarea';
        $eliminarTarea->save();

        $asignarTarea = new Permiso();
        $asignarTarea->nombre_permiso = 'asignar tarea';
        $asignarTarea->slug = 'asignar-tarea';
        $asignarTarea->save();

        $quitarTarea = new Permiso();
        $quitarTarea->nombre_permiso = 'quitar tarea';
        $quitarTarea->slug = 'quitar-tarea';
        $quitarTarea->save();

         /* CRUD TAREAS */

        $crearNota = new Permiso();
        $crearNota->slug = 'crear-nota';
        $crearNota->nombre_permiso = 'crear nota';
        $crearNota->save();

        $editarNota = new Permiso();
        $editarNota->nombre_permiso = 'editar nota';
        $editarNota->slug = 'editar-nota';
        $editarNota->save();

        $verNotas = new Permiso();
        $verNotas->nombre_permiso = 'ver nota';
        $verNotas->slug = 'ver-nota';
        $verNotas->save();

        $eliminarNota = new Permiso();
        $eliminarNota->nombre_permiso = 'eliminar nota';
        $eliminarNota->slug = 'eliminar-nota';
        $eliminarNota->save();

         /* CRUD NOTA */

         $crearProyecto = new Permiso();
         $crearProyecto->nombre_permiso = 'crear proyecto';
         $crearProyecto->slug = 'crear-proyecto';
         $crearProyecto->save();
 
         $editarProyecto = new Permiso();
         $editarProyecto->nombre_permiso = 'editar proyecto';
         $editarProyecto->slug = 'editar-proyecto';
         $editarProyecto->save();
 
         $eliminarProyecto = new Permiso();
         $eliminarProyecto->nombre_permiso = 'eliminar proyecto';
         $eliminarProyecto->slug = 'eliminar-proyecto';
         $eliminarProyecto->save();
 
         $asignarProyecto = new Permiso();
         $asignarProyecto->nombre_permiso = 'asignar proyecto';
         $asignarProyecto->slug = 'asignar-proyecto';
         $asignarProyecto->save();

         $verProyectos = new Permiso();
         $verProyectos->nombre_permiso = 'ver proyecto';
         $verProyectos->slug = 'ver proyecto';
         $verProyectos->save();
 
         $quitarProyecto = new Permiso();
         $quitarProyecto->nombre_permiso = 'quitar proyecto';
         $quitarProyecto->slug = 'quitar-proyecto';
         $quitarProyecto->save();

         /* CRUD PROYECTOS */

         $crearRol = new Permiso();
         $crearRol->nombre_permiso = 'crear rol';
         $crearRol->slug = 'crear-rol';
         $crearRol->save();
 
         $editarRol = new Permiso();
         $editarRol->nombre_permiso = 'editar rol';
         $editarRol->slug = 'editar-rol';
         $editarRol->save();
 
         $eliminarRol= new Permiso();
         $eliminarRol->nombre_permiso = 'eliminar rol';
         $eliminarRol->slug = 'eliminar-rol';
         $eliminarRol->save();
 
         $asignarRol= new Permiso();
         $asignarRol->nombre_permiso = 'asignar rol';
         $asignarRol->slug = 'asignar-rol';
         $asignarRol->save();

         $verRol = new Permiso();
         $verRol->nombre_permiso = 'ver rol';
         $verRol->slug = 'ver rol';
         $verRol->save();
 
         $quitarRol= new Permiso();
         $quitarRol->nombre_permiso = 'quitar rol';
         $quitarRol->slug = 'quitar-rol';
         $quitarRol->save();

        /* CRUD ROL */

         $crearPermiso = new Permiso();
         $crearPermiso->nombre_permiso = 'crear permiso';
         $crearPermiso->slug = 'crear-permiso';
         $crearPermiso->save();
 
         $editarPermiso = new Permiso();
         $editarPermiso->nombre_permiso = 'editar permiso';
         $editarPermiso->slug = 'editar-permiso';
         $editarPermiso->save();
 
         $eliminarPermiso= new Permiso();
         $eliminarPermiso->nombre_permiso = 'eliminar permiso';
         $eliminarRol->slug = 'eliminar-permiso';
         $eliminarRol->save();
 
         $asignarPermiso= new Permiso();
         $asignarPermiso->nombre_permiso = 'asignar permiso';
         $asignarPermiso->slug = 'asignar-permiso';
         $asignarPermiso->save();

         $verPermiso = new Permiso();
         $verPermiso->nombre_permiso = 'ver permiso';
         $verPermiso->slug = 'ver permiso';
         $verPermiso->save();
 
         $quitarPermiso= new Permiso();
         $quitarPermiso->nombre_permiso = 'quitar permiso';
         $quitarPermiso->slug = 'quitar-permiso';
         $quitarPermiso->save();

        /* CRUD PERMISO */

    }
}
