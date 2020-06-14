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
              @if (Auth::user()->tieneRol('administrador'))
              <form method="POST" action="/register">
                @csrf
                <div class="text-left" style="width: 100%;">
                  <label for="nombre" style="text-align: left;">Nombre: </label>
                  <input type="text" width="100%" id="nombre" class="form-control  @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus/>
                  @error('nombre')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="text-left" style="width: 100%;">
                  <label for="email" style="text-align: left;">Email: </label>
                  <input type="text" width="100%" id="nombre" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="text-left" style="width: 100%;">
                  <label for="apodo" style="text-align: left;">Apodo: </label>
                  <input type="text" width="100%" class="form-control" value="" id="apodo" placeholder="El apodo es opcional"/>
                </div>
                <div class="text-left" style="width: 100%;">
                  <label for="password" style="text-align: left;">Nueva contraseña: </label>
                  <input type="password" width="100%" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="text-left" style="width: 100%;">
                  <label for="re-entryPassword" style="text-align: left;">Re-Contraseña: </label>
                  <input type="password" width="100%" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"/>
                </div>
                <br>
                <div class="text-center" style="width: 100%;">
                  <button type="submit" class="btn btn-primary">
                   {{ __('Register') }}
                  </button>
                </div>
              </form>
              @else
              <div class="card-body">
                <h3>Listado de usuarios</h3>
                <ul class="text-left">
                @foreach ($listaUsuarios as $usuario)
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
            @foreach ($listaRoles as $rol)
              <option>{{ $rol->nombre_rol }} </option>
            @endforeach
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