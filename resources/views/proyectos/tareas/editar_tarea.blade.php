<button class= class="btn btn-lg btn-block btn-info" onclick="document.getElementById('editar_tarea').style.display='block'" style="width:auto;"><i class="fa fa-sign-in" aria-hidden="true"></i>
    Editar Tarea
    </button>
  <div class="center mt-3">
    <div class="modal" id="editar_tarea" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" id="cabecera">
                    <h4 id="titulo-modal">Crear Tarea</h4>
                    <button type="button" class="close text-right" data-dismiss="modal"><span onclick="document.getElementById('editar_tarea').style.display='none'" 
                        class="w3-button w3-display-topright">&times;</span></button>						 
                </div>
                <div class="modal-body" style="padding:40px 50px;max-height:500px;" >
                    <div class="card-deck mb-3 text-center justify-content-center" style="max-width:900px">
                        <div class="d-inline card mb-4 shadow-sm"  id="carta modal">
                          <form method="POST" action="{{route('actualizar_tarea', $tarea->id)}}">
                            @method('PATCH')
                            @csrf
                            <div class="card-body">
                                <input id="proyecto_id" name="proyecto_id" type="hidden" value="{{$tarea->proyecto_id}}" />
                                <p>proyecto_id:{{$tarea->proyecto_id}}</p>
                                <div class="text-left" style="width: 100%;">
                                  <label for="titulo_tarea" style="text-align: left;">Titulo tarea:</label>
                                  <input type="text" width="100%" id="titulo_tarea" class="form-control" name="titulo_tarea" value="{{ $tarea->nombre_tarea}}"/>
                                </div>
                                <div class="text-left" style="width: 100%;">
                                    <label for="descripcion_tarea" style="text-align: left;">Descripcion: </label>
                                    <textarea width="100%" id="descripcion_tarea" class="form-control" name="descripcion_tarea" value="{{$tarea->descripcion_tarea }}">{{$tarea->descripcion_tarea}}</textarea>
                                </div>
                                <div class="text-left" style="width: 25%;">
                                  <label for="n_horas_asignadas" style="text-align: left;">Horas asignadas: </label>
                                  <input type="number" width="100%" id="n_horas_asignadas" class="form-control @error('n_horas_asignadas') is-invalid @enderror" name="n_horas_asignadas" value="{{$tarea->n_horas_asignadas}}"/>
                                  @error('n_horas_asignadas')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                              <div class="text-left" style="width: 25%;">
                                <label for="estado" style="text-align: left;">Estado:</label>
                                <select class='form-control select2' value"" name='estados'>
                                    @foreach ($estados as $id=>$estado)
                                        @if ($estado == $tarea->estado)
                                            <option selected value="{{$id}}">{{ $tarea->estado }}</option>
                                        @else
                                            <option value="{{ $id }}">{{ $estado}}</option>
                                        @endif
                                    @endforeach
                                </select>
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
                    <button type="button" class="btn btn-danger text-right" data-dismiss="modal"><span onclick="document.getElementById('editar_tarea').style.display='none'" 
                        class="w3-button w3-display-topright">Cancelar</span></button>
                </div>
            </div>									
        </div>						
    </div>
  </div>
  