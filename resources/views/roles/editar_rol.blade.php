@extends('plantilla')
@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Actualizar Rol: {{$rol->nombre_rol}}</h1>
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
  
<form method="post" action="{{ route( 'actualizar_rol', $rol->id) }}">
    @method('PATCH')
    @csrf
    <div class="form-group text-left" style="width: 100%;">
      <label for="nombre_rol" style="text-align: left;">Nombre Rol: </label>
      <input type="text" width="100%" id="nombre_rol" class="form-control" name="nombre_rol" value="{{ $rol->nombre_rol }}"/>
    </div>
    <div class="form-group text-left" style="width: 100%;">
      <label for="slug" style="text-align: left;">Slug: </label>
      <input type="text" width="100%" id="slug" class="form-control" name="slug" value="{{ $rol->slug }}"/>
    </div>
    <div class="form-group text-left" style="width: 100%;">
      <label for="descripcion" style="text-align: left;">Descripcion del Rol: </label>
      <input type="text" width="100%" id="descripcion_rol" class="form-control" name="descripcion_rol" value="{{ $rol->descripcion_rol }}"/>
    </div>
</br>
    <div class="form-group pull-right">
        <a class="btn btn-danger" href="{{ route('administracion') }}">Volver a la pantalla anterior</a>
        <button type="submit" class="btn btn-success">Actualizar Rol</button>
    </div>                   
</form>    
<form action="{{ route('borrar_rol', $rol->id)}}" method="post" style="display: inline-block">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger btn-sm" type="submit">Delete</button>
</form>


  
@endsection