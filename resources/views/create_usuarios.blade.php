<form method="POST" action="/register">
    @csrf
    <div class="text-left" style="width: 100%;">
      <label for="nombre" style="text-align: left;">Nombre: </label>
      <input type="text" width="100%" id="nombre" class="form-control  @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus/>
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
