
<button class="btn btn-outline-success" onclick="document.getElementById('crear_tarea').style.display='block'" style="width:auto;"><i class="fa fa-sign-in" aria-hidden="true"></i>
  Crear Tarea
  </button>
<div class="center mt-3">
  <div class="modal" id="crear_tarea" role="dialog">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header" id="cabecera">
                  <h4 id="titulo-modal">Crear Tarea</h4>
                  <button type="button" class="close text-right" data-dismiss="modal"><span onclick="document.getElementById('crear_tarea').style.display='none'" 
                      class="w3-button w3-display-topright">&times;</span></button>						 
              </div>
              <div class="modal-body" style="padding:40px 50px;max-height:500px;" >
                  <div class="card-deck mb-3 text-center justify-content-center" style="max-width:900px">
                      <div class="d-inline card mb-4 shadow-sm"  id="carta modal">
                        <form method="POST" action="/guardar_tarea">
                          @csrf
                          <div class="card-body">
                              <input id="proyecto_id" name="proyecto_id" type="hidden" value="{{$tarea->proyecto_id}}" />
                              <p>proyecto_id:{{$tarea->proyecto_id}}</p>
                              <div class="text-left" style="width: 100%;">
                                <label for="titulo_tarea" style="text-align: left;">Titulo tarea: </label>
                                <input type="text" width="100%" id="titulo_tarea" class="form-control  @error('titulo_tarea') is-invalid @enderror" name="titulo_tarea" value="{{ old('titulo_tarea') }}" required autocomplete="titulo_tarea" autofocus/>
                                @error('titulo_tarea')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                              </div>
                              <div class="text-left" style="width: 100%;">
                                  <label for="descripcion_tarea" style="text-align: left;">Descripcion: </label>
                                  <textarea width="100%" id="descripcion_tarea" class="form-control @error('descripcion_tarea') is-invalid @enderror" name="descripcion_tarea" value="{{ old('descripcion_tarea') }}" required autocomplete="descripcion_tarea"></textarea>
                                  @error('descripcion_tarea')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                              <div class="text-left" style="width: 100%;">
                                <label for="n_horas_asignadas" style="text-align: left;">Introduce el tiempo en horas: </label>
                                <input type="number" width="100%" id="n_horas_asignadas" class="form-control @error('n_horas_asignadas') is-invalid @enderror" name="n_horas_asignadas" value="{{ old('n_horas_asignadas') }}" required autocomplete="n_horas_asignadas"/>
                                @error('n_horas_asignadas')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            <br>
                              <div class="text-center" style="width: 100%;">
                                <button type="submit" class="btn btn-primary">
                                 {{ __('Guardar tarea') }}
                                </button>
                              </div>                             
                          </div>
                        </form>
                      </div>
                  </div>							
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger text-right" data-dismiss="modal"><span onclick="document.getElementById('gestionUsuarios').style.display='none'" 
                      class="w3-button w3-display-topright">Cancelar</span></button>
              </div>
          </div>									
      </div>						
  </div>
</div>
