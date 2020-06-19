@extends('plantilla')
<style>
    
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
        max-height: 500px;
        max-width: 400px;
        overflow: auto;
        
    }

    #atras{
      position: absolute;
      top:10%;
      left:15%;
      text-decoration:none;
    }


</style> 



@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Proyectos</h1>
@endsection

@section('unnombre')
 
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">{{$proyecto->titulo_proyecto}}</h1>
    <ul class="list-unstyled mt-3 mb-4">
        <li>Fecha inicio prevista: {{$proyecto->fecha_inicio_prevista}}</li>
        <li>Fecha final prevista: {{$proyecto->fecha_fin_prevista}}</li>
        <li>Cliente: {{$proyecto->nombre_cliente}}</li>
        <li>Estado: {{$proyecto->estado}}</li>
        <li>Usuario: {{$proyecto->usuario_id}}</li>
      </ul>
  </div>
  
  <div class="container">
    <div>
      <h2>Descripcion del proyecto:</h2>
      <p>{{$proyecto->descripcion_larga}}</p>
    </div>
      @isset($tareas)
        <div class="card-deck mb-3 text-center">
          @forelse ($tareas as $tarea)
          <div class="d-inline card mb-4 shadow-sm" id="carta {{$tarea->id}}">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Tarea {{$tarea->id}}:</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <li>Nombre: {{$tarea->nombre_tarea}}</li>
                <li>Fecha Inicio:{{$tarea->creada_el}}</li>
                <li>Tiempo asignado: {{$tarea->n_horas_asignadas}} hrs</li>
                <li>Estado: {{$tarea->estado}}</li>
              </ul>
                <a href="{{route('info_tarea',[$proyecto->id, $tarea->id])}}" id="boton-tarea"><button type="button" class="btn btn-lg btn-block btn-primary">Ver tarea</button></a>
            </div>
          </div>
          @empty
          <div>
          <h2>Este proyecto no tiene tareas aun</h2>
            <p>¿Quieres crear una?</p>
            @include('proyectos.tareas.crear_tarea')
          </div> 
          @endforelse                  
      @endisset      
  </div>
    @if (!$tareas->isEmpty())
      <a href="{{route('inicio_tareas', $proyecto->id)}}" id="todas_tareas"><button type="button" class="btn btn-lg btn-block btn-info">Ver todas las tareas</button></a>
    @endif       
    <a href="{{route ('inicio_proyectos')}}" id="atras"><button type="button" class="btn btn-lg btn-block btn-primary">Atras</button></a>
@endsection