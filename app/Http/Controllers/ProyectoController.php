<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Proyecto;
use App\Tarea;
use App\User;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->get();
        $proyectos = Proyecto::get();
        $tareas = Tarea::get();
        return view('proyectos.inicio_proyectos', compact('users','proyectos','tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyectos.crear_proyecto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $this->validate(request(), [
                'titulo_proyecto' => 'required|string',
                'descripcion_proyecto' => 'nullable|string',
                'descripcionBreve_proyecto' => 'required|string',
                'nombre_cliente' =>'required|string',
                'fecha_inicio'=> 'required|date',
                'fecha_fin'=> 'required|date',
                'estado' => 'string',
            ]);
            
            $usuario = User::find(request('usuario'));
            $proyecto = $usuario->proyectos()->create([
                'titulo_proyecto' => request('titulo_proyecto'),
                'descripcion_larga' => request('descripcion_proyecto'),
                'descripcion_corta' => request('descripcionBreve_proyecto'),
                'nombre_cliente' => request('nombre_cliente'),
                'fecha_inicio_prevista'=> request('fecha_inicio'),
                'fecha_fin_prevista'=> request('fecha_fin'),
                'estado' => request('estado'),
                'usuario_id' => request('usuario'),
                    
            ]);

            return redirect(route('inicio_proyectos'))->with('success','Has creado un nuevo proyecto.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        $tareas_proyecto=Proyecto::find($id)->tareas->take(3);

        return view('proyectos.info_proyecto', ['proyecto'=> $proyecto, 'tareas'=>$tareas_proyecto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $usuarios = User::all();
        $estados = [
            1 =>'no_iniciado', 
            2 =>'iniciado', 
            3 =>'pausado',
            4 => 'finalizado'];
        return view('proyectos.editar_proyecto')->with(compact('proyecto', 'usuarios', 'estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::findOrFail($id);
                    
        $datos = $request->validate([
                'titulo_proyecto' => 'required|string',
                'descripcion_proyecto' => 'nullable|string',
                'descripcionBreve_proyecto' => 'required|string',
                'nombre_cliente' =>'required|string',
                'fecha_inicio'=> 'required|date',
                'fecha_fin'=> 'required|date',
                'estado' => 'string'
             ]);

       $proyecto->update($datos);

  
        return redirect()->route('inicio_proyectos')
                                    ->with('success', 'Se actualizo el proyecto.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarea = Tarea::findOrFail($id);
        $proyecto_id=$tarea->proyecto_id;
        $tarea->delete();
        return redirect()->route('inicio_tareas', $proyecto_id)
                                    ->with('success', 'la tarea {{$id}} fue borrado.');
    }
}
