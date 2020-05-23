<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    // funcion que solo permite dejar pasar al usuario a la rutas si hace sesion
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');

        $this->middleware('guest', ['only' => 'showLoginForm']);
    }


    // retorna a vista login
    public function showLoginForm(){

        return view('login');
    }


    // funcion para inciar sesion
    public function login(){

        $datos  = $this->validate(request(), [
            $this->username() => 'email|required|string',
            $this->getAuthPassword() => 'required|string'
       ]);
           // valida si lo datos son correctos crea la sesion
           

           if (Auth::attempt(['email'=> $datos['email'] , 'password' => $datos['password'] ] )) {

            

            return redirect('home');
        }
        
        

        // si son incorrectos devuelve un mensaje
        return back()
            ->withErrors([$this->username() =>  trans('auth.failed')])
            ->withInput(request([$this->username()]));

            
           /** return $this->getAuthPassword(); */
    }


    // funcion para cerrar sesion
    public function logout(){


        // cierra sesion y devuelve al login 
        Auth::logout();

        return redirect('/');
    }


    public function getAuthPassword () {

        return "password";

    }

    public function username(){


        return "email";
    }

}