<?php

namespace App\Http\Controllers;

use App\Rol;
use App\User;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarios.administracion');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.crear_rol');
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
            'nombre_rol' => 'required|string',
            'slug' => 'required|string',
            'descripcion_rol' =>'nullable|string',
        ]);

        $rol = Rol::create(request(['nombre_rol', 'slug', 'descripcion_rol']));

        return redirect('administracion')->with('success','Has registrado un nuevo rol.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = Rol::findOrFail($id);
        return view('roles.editar_rol', compact('rol'));
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
        $rol = Rol::findOrFail($id);
            
        $datos = $request->validate([
            'nombre_rol' => 'required|string',
            'slug' => 'required|string',
            'descripcion_rol' =>'required|string', ]);
    
       $rol->update($datos);
      
        return redirect()->route('administracion')
                        ->with('success','Rol modificado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        $rol->delete();
        return redirect()->route('administracion')
                                    ->with('success', 'el rol {{$rol->id}} fue borrado.');
    }
}
