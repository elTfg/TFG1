@extends('plantilla')
<style>
    
    .container{
    height: auto;
    }

    #titulo_navbar{
        width: 100% ;
        text-align: center;
    }
    #texto_titulo{
        font-size: 30px;

    }

    #proyectos-historial {
        margin-top: 7%;
        
    }
    
    #proyecto-historial {
        max-width: 1000px;
        overflow: auto;
        
    }

    #crear-nota{
        color: white;
        text-decoration:none;
    }

    #test{
        color: white;
        text-decoration:none;
        position: absolute;
        right:1%;
        top:10%;
    }

    #notas {
      text-align:right;
    }
</style> 



@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Administración</h1>
@endsection

@section('unnombre')
  
  <div class="container" id="proyectos-historial">
    <div class="card-deck mb-3 text-center justify-content-center">
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Crear usuarios</h4>
        </div>
        <div class="card-body text-left">
            <div class="text-center">
              @if (Auth::user()->tieneRol('administrador'))
                @include('usuarios.create_usuarios')
                 @yield('formulario')
                @include('usuarios.modal_usuario')                
              @else
              <div class="card-body">
                <h3>Listado de usuarios</h3>
                <ul class="text-left">
                @foreach ($users as $usuario)
                  <li>{{ $usuario->nombre }} </li>
                @endforeach
                </ul>
              </div>              
              @endif             
            </div>
        </div>
      </div> 
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Crear roles</h4>
        </div>
        <div class="card-body text-left">
          <div class="text-center">
            @if (Auth::user()->tieneRol('administrador') || Auth::user()->tieneRol('supervisor')) 
              @include('roles.crear_rol')
               @yield('formulario_roles')
               @include('roles.modal_rol')
            @else
            <div class="card-body">
              <h3>Listado de roles</h3>
              <ul class="text-left">
              @foreach ($roles as $rol)
                <li>{{ $rol->nombre_rol }} </li>
              @endforeach
              </ul>
            </div>              
            @endif             
          </div>
        </div>
      </div>
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Crear permisos</h4>
        </div>
        <div class="card-body">
          <p class="notas">Nombre del permiso:</p>
               <input type="text" id="nombre" name="nombre"><br/>
               <br/>
               <button type="button" class="btn btn-success">Aceptar</button>
               <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
        <div class="card-body">
          <p class="notas">Asignar permisos a roles:</p><br/>
          <p class="notas">Permisos:</p>
          <select name="usuarios">
            @foreach ($permisos as $permiso)
            <option>{{ $permiso->nombre_permiso }} </option>
          @endforeach
          </select>
          <br/><br/>
          <p class="notas">Roles:</p>
          <select name="usuarios">
            @foreach ($roles as $rol)
            <option>{{ $rol->nombre_rol }} </option>
          @endforeach
          </select>
          <br/><br/>
          <button type="button" class="btn btn-success">Aceptar</button>
          <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  
@endsection