<form method="POST" action="/registroRol">
    @csrf
    <div class="text-left" style="width: 100%;">
      <label for="nombre_rol" style="text-align: left;">Nombre Rol: </label>
      <input type="text" width="100%" id="nombre_rol" class="form-control  @error('nombre_rol') is-invalid @enderror" name="nombre_rol" value="{{ old('nombre_rol') }}" required autocomplete="nombre_rol" autofocus/>
      @error('nombre_rol')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="text-left" style="width: 100%;">
      <label for="slug" style="text-align: left;">Slug: </label>
      <input type="text" width="100%" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{ old('slug') }}" required autocomplete="slug"/>
      @error('slug')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
    </div>
    <div class="text-left" style="width: 100%;">
        <label for="descripcion_rol" style="text-align: left;">Introduce una descripcion para el rol: </label>
        <input type="text" width="100%" id="descripcion_rol" class="form-control @error('descripcion_rol') is-invalid @enderror" name="descripcion_rol" value="{{ old('descripcion_rol') }}" required autocomplete="email"/>
        @error('descripcion_rol')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    <br>
    <div class="text-center" style="width: 100%;">
      <button type="submit" class="btn btn-primary">
       {{ __('Crear Rol') }}
      </button>
    </div>
    <br>
    <div>
      <h4>Asignar rol a usuario </h4>
    </div>
    <br> 
    <div class="text-center" style="width: 100%;">
      <label for="rol" style="text-align: center;">Rol: </label>
      <select name="rol_id" style="width: 100%">
        <option value="" selected="selected">Elige un rol</option>
        @foreach ($roles as $id => $rol)
          <option value="{!! $id !!}">{{ $rol->nombre_rol }} </option>
        @endforeach
      </select>
    </div>
    <div class="text-center" style="width: 100%;">
      <label for="rol" style="text-align: center;">Usuario: </label>
      <select name="usuario_id" style="width: 100%">
        <option value="" selected="selected">Elige un usuario</option>
        @foreach ($users as $id => $usuario)
          <option value="{!! $id !!}">{{ $usuario->nombre }} </option>
        @endforeach
      </select>
    </div>
  </form