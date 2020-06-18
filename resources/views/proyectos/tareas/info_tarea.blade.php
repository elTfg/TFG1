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

    #botones{
        padding-left:40%;
        padding-right:40%;
    }

    #iniciar{
        text-decoration: none;
        position: absolute;
        top:10%;
        right:23%;
    }

    #pausa{
        text-decoration: none;
        position: absolute;
        top:10%;
        right:15%;
    }

    #terminado{
        text-decoration: none;
        position: absolute;
        top:10%;
        right:5%;
    }
</style> 



@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Tareas</h1>
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
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">{{$tarea->nombre_tarea}}</h1>
    <ul class="list-unstyled mt-3 mb-4">
        <li>Fecha Inicio: {{$tarea->creada_el}}</li>
        <li>Fecha Fin: {{$tarea->finalizada_el}}</li>
        <li>Estado: {{$tarea->estado}}</li>
        <li>Pertenece al proyecto con id: {{$tarea->proyecto_id}}
      </ul>
  </div>  
  <div class="container">
    <div class="card-deck mb-3 text-center">
        <div>
            <p>{{$tarea->descripcion_tarea}}</p>
        </div>
    </div>
    <a href="{{route('inicio_tareas', $tarea->proyecto_id)}}" id="atras"><button type="button" class="btn btn-lg btn-block btn-primary">Atras</button></a>

    <div id="botones">
    @include('proyectos.tareas.editar_tarea')
    <form action="{{ route('borrar_tarea', $tarea->id)}}" method="post" style="display: inline-block">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
      </form>
    <a href="tareas" id="terminado"><button type="button" class="btn btn-lg btn-block btn-secondary">Terminar</button></a><br/>
</div>
@endsection