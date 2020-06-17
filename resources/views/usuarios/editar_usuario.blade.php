@extends('plantilla')
@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Actualizar usuario: {{$usuario->nombre}}</h1>
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
  
<form method="post" action="{{ route( 'actualizar_usuario', $usuario->id) }}">
    @method('PATCH')
    @csrf
    <div class="form-group text-left" style="width: 100%;">
      <label for="nombre" style="text-align: left;">Nombre Usuario: </label>
      <input type="text" width="100%" id="nombre" class="form-control" name="nombre" value="{{ $usuario->nombre }}"/>
    </div>
    <div class="form-group text-left" style="width: 100%;">
      <label for="apodo" style="text-align: left;">Apodo/Nickname: </label>
      <input type="text" width="100%" id="nombre" class="form-control" name="apodo" value="{{ $usuario->apodo }}"/>
    </div>
    <div class="form-group text-left" style="width: 100%;">
      <label for="email" style="text-align: left;">Email Usuario: </label>
      <input type="email" width="100%" id="nombre" class="form-control" name="email" value="{{ $usuario->email }}"/>
    </div>
    <div class="form-group text-left" style="width: 100%;">
      <label for="password" style="text-align: left;">Contraseña: </label>
      <input type="password" width="100%" id="nombre" class="form-control" name="password" value="{{ $usuario->password }}"/>
    </div>
    <div class="text-left" style="width: 100%;">
      <label for="re-entryPassword" style="text-align: left;">Re-Contraseña: </label>
      <input type="password" width="100%" class="form-control" id="password_confirmation" name="password_confirmation"/>
    </div>
</br>
    <div class="form-group pull-right">
        <a class="btn btn-danger" href="{{ route('administracion') }}">Volver a la pantalla anterior</a>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <form action="{{ route('borrar_usuario', $usuario->id)}}" method="post" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
          </form>
    </div>                   
</form>    



  
@endsection