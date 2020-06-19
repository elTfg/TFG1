@extends('plantilla')
@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Editar Proyecto: {{$proyecto->titulo_proyecto}}</h1>
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
              <input type="text" width="100%" id="titulo_proyecto" class="form-control  @error('titulo_proyecto') is-invalid @enderror" name="titulo_proyecto" value="{{ $proyecto->titulo_proyecto }}" required autocomplete="titulo_proyecto" autofocus/>
              @error('titulo_proyecto')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="text-left" style="width: 100%;">
                <label for="fecha_inicio:" style="text-align: left;">Fecha de inicio prevista: </label>
                <input type="date" width="100%" id="fecha_inicio" class="form-control  @error('fecha_inicio') is-invalid @enderror" value="{{ $proyecto->fecha_inicio_prevista }}" name="fecha_inicio" required/>
                @error('fecha_inicio')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
            <div class="text-left" style="width: 100%;">
              <label for="fecha_fin:" style="text-align: left;">Fecha de Fin prevista: </label>
              <input type="date" width="100%" id="fecha_fin" class="form-control  @error('fecha_fin') is-invalid @enderror" value="{{ $proyecto->fecha_fin_prevista }}" name="fecha_fin" required/>
              @error('fecha_fin')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
          <div class="text-left" style="width: 100%;">
            <label for="descripcionBreve_proyecto" style="text-align: left;">Descripcion breve: </label>
            <input type="text" width="100%" id="titulo_tarea" class="form-control  @error('descripcionBreve_proyecto') is-invalid @enderror" name="descripcionBreve_proyecto" value="{{ $proyecto->descripcion_corta }}" required autocomplete="descripcionBreve_proyecto" autofocus/>
            @error('descripcionBreve_proyecto')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="text-left" style="width: 100%;">
            <label for="descripcion_proyecto" style="text-align: left;">Descripcion del Proyecto: </label>
            <textarea width="100%" id="descripcion_proyecto" class="form-control @error('descripcion_proyecto') is-invalid @enderror" name="descripcion_proyecto" value="{{ $proyecto->descripcion }}"  autocomplete="descripcion_tarea"></textarea>
            @error('descripcion_proyecto')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="text-left" style="width: 100%;">
              <label for="nombre_cliente" style="text-align: left;">Cliente: </label>
              <input type="text" width="100%" id="nombr_cliente" class="form-control  @error('nombre_cliente') is-invalid @enderror" name="nombre_cliente" value="{{  $proyecto->nombre_cliente }}" required autocomplete="nombre_cliente" autofocus/>
              @error('nombre_cliente')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="text-left" style="width: 25%;">
              <label for="usuario" style="text-align: left;">Usuario asignado:{{$proyecto->usuario_id}}</label>
              <input name="usuario" type="hidden" value="{{$proyecto->usuario_id}}"/>
            </div>
            <div class="text-left" style="width: 25%;">
              <label for="usuario" style="text-align: left;">Asignar a un estado:</label>
              <select class='form-control select2' value"" name='estados'>                      
                @foreach ($estados as $id=>$estado)
                  @if ($id == 1)
                      <option value="{{$id}}" disabled="disabled"></option>
                  @else
                      <option value="{{ $id }}">{{ $estado}}</option>
                  @endif
                @endforeach
              </select>
            </div>
            <br>
            <div class="text-center" style="width: 100%;">
              <button type="submit" class="btn btn-primary">
               {{ __('Guardar proyecto') }}
              </button>
            </div>
            <form action="{{ route('borrar_proyecto', $proyecto->id)}}" method="post" style="display: inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" type="submit">Borrar</button>
            </form>                             
        </div>
      </form>
    </div>
</div>


@endsection