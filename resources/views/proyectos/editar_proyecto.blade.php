@extends('plantilla')
@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Editar Proyecto: {{$proyecto->nombre_proyecto}}</h1>
@endsection

@section('unnombre')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="card-deck mb-3 text-center justify-content-center" style="max-width:900px">
    <div class="d-inline card mb-4 shadow-sm"  id="carta modal">
      <form method="POST" action="/guardar_proyecto">
        @csrf
            <div class="text-left" style="width: 100%;">
              <label for="titulo_proyecto" style="text-align: left;">Titulo Proyecto: </label>
              <input type="text" width="100%" id="titulo_proyecto" class="form-control  @error('titulo_proyecto') is-invalid @enderror" name="titulo_proyecto" value="{{ old('titulo_proyecto') }}" required autocomplete="titulo_proyecto" autofocus/>
              @error('titulo_proyecto')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="text-left" style="width: 100%;">
                <label for="fecha_inicio:" style="text-align: left;">Fecha de inicio prevista: </label>
                <input type="date" width="100%" id="fecha_inicio" class="form-control  @error('fecha_inicio') is-invalid @enderror" name="fecha_inicio" required/>
                @error('fecha_inicio')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
            <div class="text-left" style="width: 100%;">
              <label for="fecha_fin:" style="text-align: left;">Fecha de Fin prevista: </label>
              <input type="date" width="100%" id="fecha_fin" class="form-control  @error('fecha_fin') is-invalid @enderror" name="fecha_fin" required/>
              @error('fecha_fin')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
          <div class="text-left" style="width: 100%;">
            <label for="descripcionBreve_proyecto" style="text-align: left;">Descripcion breve: </label>
            <input type="text" width="100%" id="titulo_tarea" class="form-control  @error('descripcionBreve_proyecto') is-invalid @enderror" name="descripcionBreve_proyecto" value="{{ old('descripcionBreve_proyecto') }}" required autocomplete="descripcionBreve_proyecto" autofocus/>
            @error('descripcionBreve_proyecto')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="text-left" style="width: 100%;">
            <label for="descripcion_proyecto" style="text-align: left;">Descripcion del Proyecto: </label>
            <textarea width="100%" id="descripcion_proyecto" class="form-control @error('descripcion_proyecto') is-invalid @enderror" name="descripcion_proyecto" value="{{ old('descripcion_proyecto') }}"  autocomplete="descripcion_tarea"></textarea>
            @error('descripcion_proyecto')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="text-left" style="width: 100%;">
              <label for="nombre_cliente" style="text-align: left;">Cliente: </label>
              <input type="text" width="100%" id="nombr_cliente" class="form-control  @error('nombre_cliente') is-invalid @enderror" name="nombre_cliente" value="{{ old('nombre_cliente') }}" required autocomplete="nombre_cliente" autofocus/>
              @error('nombre_cliente')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="text-left" style="width: 25%;">
              <label for="estado" style="text-align: left;">Asignar a un usuario:</label>
              <select class='form-control select2' value"" name='usuarios'>
                  @foreach ($users as $usuario)
                  <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                  @endforeach
              </select>
          </div>
          <input id="estado" name="estado" type="hidden" value="no_iniciado" />
          <br>
            <div class="text-center" style="width: 100%;">
              <button type="submit" class="btn btn-primary">
               {{ __('Guardar proyecto') }}
              </button>
            </div>                             
        </div>
      </form>
    </div>
</div>


@endsection