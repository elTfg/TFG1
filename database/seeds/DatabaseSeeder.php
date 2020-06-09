<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->truncateTablas([
            'permiso',
            'rol'
            //'usuario'
        ]);
        $this->call(tablaPermisoSeeder::class);
        $this->call(tablaRolSeeder::class);
        //$this->call(tablaUsuarioSeeder::class);
    }
    protected function truncateTablas(array $tablas)
    {
        //Esta funcion sirve para truncar (vaciar) las tablas en caso de tener que volver a rellenarlas con datos fijos
        //Solo se usa en el entorno de desarrollo.
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); //deshabilito la clave foranea para evitar problemas
        foreach ($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); //habilito de nuevo
    }
}
