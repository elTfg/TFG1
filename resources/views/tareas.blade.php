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

    #crear-nota{
        color: white;
        text-decoration:none;
    }

    #test{
        color: white;
        text-decoration:none;
        position: absolute;
        right:1%;
        top:10%;
    }

    #tarea{
      color: black;
      text-decoration:none;
    }

    #boton-tarea{
        color: white;
        text-decoration:none;
    }
</style> 



@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Tareas</h1>
@endsection

@section('unnombre')
  
  <div class="container" id="proyectos-historial">
    <div id="test">
    </div>
    <div class="card-deck mb-3 text-center">
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Tarea 1</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Nombre: Tarea 1</li>
            <li>Fecha Inicio: 20/05/2020</li>
            <li>Fecha Inicio: 20/06/2020</li>
            <li>Estado: Sin comenzar</li>
          </ul>
          <a href="tarea-concreto" id="boton-tarea"><button type="button" class="btn btn-lg btn-block btn-primary">Ver tarea</button></a>
        </div>
      </div>
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Tarea 1</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Nombre: Tarea 1</li>
            <li>Fecha Inicio: 20/05/2020</li>
            <li>Fecha Inicio: 20/06/2020</li>
            <li>Estado: Sin comenzar</li>
          </ul>
          <a href="tarea-concreto" id="boton-tarea"><button type="button" class="btn btn-lg btn-block btn-primary">Ver tarea</button></a>
        </div>
      </div>
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Tarea 1</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Nombre: Tarea 1</li>
            <li>Fecha Inicio: 20/05/2020</li>
            <li>Fecha Inicio: 20/06/2020</li>
            <li>Estado: Sin comenzar</li>
          </ul>
          <a href="tarea-concreto" id="boton-tarea"><button type="button" class="btn btn-lg btn-block btn-primary">Ver tarea</button></a>
        </div>
      </div>
    </div>
  </div>
  
@endsection