<?php

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
    return view('/layouts/login');
});
Route::get('/proyectos', function () {
    return "Aqui ira la pestaña proyectos";
});

Route::get('/proyectos', function () {
    return "Aqui ira la pestaña proyectos";
});

Route::get('/Compañeros', function () {
    return "Aqui ira la pestaña con los compañeros del proyecto";
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

Route::get('/mis_notas', function () {
    return "Aqui ira la pagina con las notas del curso";
});
Route::get('/mis_notas/gestion_de_notas', function () {
    return "Aqui ira la pagina con formularios (añadir, actualizar, leer, etc)";
});

Route::get('/perfil', function () {
    return "Aqui ira la pagina con las notas";
});
Route::get('/perfil/gestion_de_perfil', function () {
    return "Aqui ira la pagina con formularios (añadir, actualizar, leer, etc)";
});

Route::get('/historial', function () {
    return "Aqui ira la pagina con el historial";
});

Route::get('/busqueda', function () {
    return "Aqui ira la pagina de busqueda por campo nombre de proyecto";
});
Route::get('/busqueda/avanzada', function () {
    return "Aqui ira la pagina con el formulario de busqueda por campos";
});

