<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tablaUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
       DB::table('usuario')->insert([
            'nombre' => 'root',
            'email' => 'root@root.com',
            'password' => bcrypt('1234'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')

       ]);
    }
}
