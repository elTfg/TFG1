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
        max-width: 400px;
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
              @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              @endif
              <button type="button" class="btn btn-danger text-center">Cancelar</button>
              <button type="button" class="btn btn-primary">Ver Usuarios</button>
            </div>
        </div>
        <div class="card-body">
          <ul>
          @foreach ($listaUsuarios as $usuario)
            <li>{{ $usuario->nombre }} </li>
          @endforeach
          </ul>
        </div>
      </div> 
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Crear roles</h4>
        </div>
        <div class="card-body">
          <p class="notas">Nombre del rol:</p>
               <input type="text" id="nombre" name="nombre"><br/>
               <br/>
               <button type="button" class="btn btn-success">Aceptar</button>
               <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
        <div class="card-body">
          <p class="notas">Asignar roles a usuarios:</p><br/>
          <p class="notas">Rol:</p>
          <select name="usuarios">
<<<<<<< HEAD
            @foreach ($listaRoles as $rol)
              <option>{{ $rol->nombre_rol }} </option>
            @endforeach
=======
            @foreach ($listaRoles as $roles)
            <option>{{ $roles->nombre_rol }} </option>
          @endforeach
>>>>>>> 46bbb251f8fcf039f174320e04161e6eb6f87fc3
          </select>
          <br/><br/>
          <p class="notas">Usuario:</p>
          <select name="usuarios">
            @foreach ($listaUsuarios as $usuario)
            <option>{{ $usuario->nombre }} </option>
          @endforeach
          </select>
          <br/><br/>
          <button type="button" class="btn btn-success">Aceptar</button>
          <button type="button" class="btn btn-danger">Cancelar</button>
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
            @foreach ($listaPermisos as $permisos)
            <option>{{ $permisos->nombre_permiso }} </option>
          @endforeach
          </select>
          <br/><br/>
          <p class="notas">Roles:</p>
          <select name="usuarios">
            @foreach ($listaRoles as $roles)
            <option>{{ $roles->nombre_rol }} </option>
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