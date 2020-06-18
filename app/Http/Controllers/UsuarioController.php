<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rol;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->get();
        $roles = DB::table('rol')->get();
        $permisos = DB::table('permiso')->get();
        return view('usuarios.administracion', compact('users','roles','permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create_usuarios');
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
            'nombre' => 'required',
            'email' => 'required|email',
            'apodo' =>'nullable|string',
            'password' => 'required|confirmed',
        ]);
        
        $rol_id = $request->input('rol_id');
        $rol_id+=1;
        $user = User::create(request(['nombre', 'email', 'apodo', 'password']));
        $rol = Rol::find($rol_id);
        $user->roles()->attach($rol);

        
        //auth()->login($user);
        
        return redirect('administracion')->with('success','Has registrado un nuevo usuario.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.editar_usuario', compact('usuario'));
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
        $usuario = User::findOrFail($id);
                    
        $datos = $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'apodo' =>'nullable|string',
            'password' => 'required|confirmed' ]);

       $usuario->update($datos);

  
        return redirect()->route('administracion')
                        ->with('success','Usuario modificado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect()->route('administracion')
                                    ->with('success', 'el usuario {{$id}} fue borrado.');
    }
}
