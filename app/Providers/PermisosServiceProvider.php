<?php

namespace App\Providers;

use App\Permiso;
use Illuminate\Support\Facades\Blade;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;

class PermisosServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        try{
            Permiso::get()->map(function ($permiso){
                Gate::define($permiso->slug, function ($usuario) use ($permiso){
                    return $usuario->tienePermisosPara($permiso);
                });
            });
        } catch (\Exception $e){
            report($e);
            return false;
        }

        //directivas blade
        Blade::directive('rol', function ($rol) {
            return "if(auth()->check() && auth()->user()->tieneRol({$rol})) :"; //Devuelve un if dentro de la etiqueta php
        });

        Blade::directive('endrole', function ($rol) {
            return "endif"; //devuelve el final de if dentro de la etiqueta php
        });
    }
}
