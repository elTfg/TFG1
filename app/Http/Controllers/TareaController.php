<?php

namespace App\Http\Controllers;
use App\Proyecto;
use App\Tarea;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tareas=Proyecto::find($id)->tareas;
        $proyecto=Proyecto::find($id);
        return view('proyectos.tareas.tareas')->with(compact('tareas','proyecto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $proyecto=Proyecto::find($id);
        return view('proyectos.tareas.crear_tarea', ['proyecto'=>$proyecto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'titulo_tarea' => 'required|string',
            'descripcion_tarea' => 'required|string',
        ]);
        
        $proyecto = Proyecto::find(request('proyecto_id'));
        $tarea = $proyecto->tareas()->create([
            'nombre_tarea' => request('titulo_tarea'),
            'descripcion_tarea' => request('descripcion_tarea'),
            'n_horas_asignadas' => request('n_horas_asignadas')
        ]);

        return redirect(route('inicio_tareas', $proyecto->id))->with('success','Has creado una nueva tarea.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea=Tarea::find($id);
        $estados = [
            1 =>'no_iniciada', 
            2 =>'iniciada', 
            3 =>'pausada',
            4 => 'finalizada'];

        //return view('proyectos.tareas.info_tarea', ['tarea'=>$tarea, 'estados'=>$estados]);
        return view('proyectos.tareas.info_tarea', compact('tarea','estados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('proyectos.tareas.editar_tarea')->with(compact('tareas'));
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
        $tarea = Tarea::findOrFail($id);
                    
        $datos = $request->validate([
            'nombre_tarea' => 'string',
            'descripcion_tarea' => 'string',
            'n_horas_asignadas' => 'integer',
            'estado' => 'string'
             ]);

       $tarea->update($datos);

  
        return redirect()->route('inicio_tareas', $tarea->proyecto_id)
                                    ->with('success', 'Se actualizo la tarea.');
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
