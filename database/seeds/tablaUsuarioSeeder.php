<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Permiso;
use App\Rol;

class tablaUsuarioSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       /*DB::table('usuario')->insert([
            'nombre' => 'root',
            'email' => 'root@root.com',
            'password' => bcrypt('1234'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')

       ]);*/

       $desarrollador = Rol::where('slug', 'desarrollador')->first();
       $manager = Rol::where('slug', 'jefe')->first();
       $crearTareas = Permiso::where('slug', 'crear-tareas')->first();
       $administrarUsuarios = Permiso::where('slug', 'administrar-usuarios')->first();

       $usuario1 = new User();
       $usuario1->nombre = 'usuario1';
       $usuario1->email = 'usuario1@algo.com';
       $usuario1->password = bcrypt('1234');
       $usuario1->save();
       $usuario1->roles()->attach($desarrollador);
       $usuario1->permisos()->attach($crearTareas);

       $usuario2 = new User();
       $usuario2->nombre = 'usuario12';
       $usuario2->email = 'usuario2@algo.com';
       $usuario2->password = bcrypt('1234');
       $usuario2->save();
       $usuario2->roles()->attach($manager);
       $usuario2->permisos()->attach($administrarUsuarios);




    }
}
