<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/login');
});

Route::get('/plantilla', function () {
    return view('/plantilla');
});

Route::get('/proyectos', function () {
    return "Aqui ira la pestaña proyectos";
});

Route::get('/tareas', function () {
    return view('/tareas');
});

Route::get('/tarea-concreto', function () {
    return view('/tarea-concreto');
});

Route::get('/entrada', function () {
    return view('/entrada');
});

Route::get('/compañeros', function () {
    return view('/compañeros');
});

Route::get('/proy-info', function () {
    return view('/proy-info');
});

Route::get('/proyectos-activos', function () {
    return view('/proyectos-activos');
});

Route::get('/crear-proyecto', function () {
    return view('/crear-proyecto');
});

Route::get('/crear-usuario', function () {
    return view('/crear-usuario');
});

Route::get('/crear-permiso', function () {
    return view('/crear-permiso');
});

Route::get('/crear-rol', function () {
    return view('/crear-rol');
});

Route::get('/usuarios', function () {
    return "Aqui ira la pestaña usuarios";
});

Route::get('/usuarios/gestion_de_usuarios', function () {
    return "Aqui ira la pagina con formularios (añadir, actualizar, leer, etc)";
});

Route::get('/estadisticas', function () {
    return "Aqui ira la pestaña estadisticas en tiempo";
});

Route::get('/notas', function () {
    return view('/notas');
});

Route::get('/crear-nota', function () {
    return view('/crear-nota');
});

Route::get('/mis_notas/gestion_de_notas', function () {
    return "Aqui ira la pagina con formularios (añadir, actualizar, leer, etc)";
});

Route::get('/perfil', function () {
    return view('/perfil');
});

Route::get('/perfil/gestion_de_perfil', function () {
    return "Aqui ira la pagina con formularios (añadir, actualizar, leer, etc)";
});

Route::get('/historial', function () {
    return view('/historial');
});

Route::get('/historial-proyecto', function () {
    return view('/historial-proyecto');
});

Route::get('/historial-tarea', function () {
    return view('/historial-tarea');
});

Route::get('/busqueda', function () {
    return "Aqui ira la pagina de busqueda por campo nombre de proyecto";
});
Route::get('/busqueda/avanzada', function () {
    return "Aqui ira la pagina con el formulario de busqueda por campos";
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
