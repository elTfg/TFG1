<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Auth\Events\Login;
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
// Para asignar los permisos por defecto a los roles /
Route::get('/usuarios_por_defecto', 'PermisoController@permiso');
// Fin
// Devuelve el metodo show login del controlador Login
Auth::routes(['register' => false]);
Route::get('/', 'auth\LoginController@showLoginForm');

Route::get('/administracion','UsuarioController@index')->name('administracion');
Route::get('/registro/crearUsuario','UsuarioController@create');
Route::post('/registro', 'UsuarioController@store');
Route::get('/perfil/{user}','UsuarioController@show');
Route::get('perfil/{user}/editar_info', 'UsuarioController@edit')->name('editar_usuario');
Route::match(['put', 'patch'],'/registro/{user}','UsuarioController@update')->name('actualizar_usuario');
Route::delete('/registro/{user}','UsuarioController@destroy')->name('borrar_usuario');
Route::resource('usuarios','UsuarioController');

Route::get('/administracion/roles', 'RolController@index')->name('administrar_roles');
Route::get('/registro/crearRol','RolController@create');
Route::post('/registroRol', 'RolController@store');
Route::get('/registro/{rol}','RolController@show');
Route::get('registro/{rol}/editar_rol', 'RolController@edit')->name('editar_rol');
Route::match(['put', 'patch'],'/registro/{rol}','RolController@update')->name('actualizar_rol');
Route::delete('/registro/borrar_rol/{rol}','RolController@destroy')->name('borrar_rol');
Route::resource('roles','RolController');

Route::get('/proyectos/inicio', 'ProyectoController@index')->name('inicio_proyectos');
Route::get('/proyecto/crearProyecto','ProyectoController@create');
Route::get('/proyecto/{proyecto}','ProyectoController@show')->name('info_proyecto');
Route::post('/guardar_proyecto', 'ProyectoController@store');
Route::get('/proyecto/{proyecto}/editar_proyecto', 'ProyectoController@edit')->name('editar_proyecto');
Route::match(['put', 'patch'],'/registro/{proyecto}','ProyectoController@update')->name('actualizar_proyecto');
Route::delete('/proyecto/borrar_proyecto/{proyecto}','ProyectoController@destroy')->name('borrar_proyecto');
Route::resource('proyectos','ProyectoController');

Route::get('/proyectos/{proyecto}/tareas', 'TareaController@index')->name('inicio_tareas');
Route::get('/proyecto/{proyecto}/tarea','TareaController@create')->name('crear_tarea');
Route::get('/proyecto/{proyecto}/{tarea}','TareaController@show')->name('info_tarea');
Route::post('/guardar_tarea', 'TareaController@store') ;
Route::get('/tarea/{tarea}/editar_tarea', 'TareaController@edit')->name('editar_tarea');
Route::match(['put', 'patch'],'/proyecto/{tarea}','TareaController@update')->name('actualizar_tarea');
Route::delete('/proyecto/{tarea}','TareaController@destroy')->name('borrar_tarea');
Route::resource('tareas','TareaController');



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/pruebas', function () {
    return view('pruebas');
});