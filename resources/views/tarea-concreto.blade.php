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
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Tarea X</h1>
    <ul class="list-unstyled mt-3 mb-4">
        <li>Fecha Inicio: 20/05/2020</li>
        <li>Fecha Inicio: 20/06/2020</li>
        <li>Estado: Sin comenzar</li>
      </ul>
  </div>
  
  <div class="container">
    <div class="card-deck mb-3 text-center">
        <div>
            <p>Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea </p>
        </div>
    </div>
    <a href="tareas" id="atras"><button type="button" class="btn btn-lg btn-block btn-primary">Atras</button></a>

    <div id="botones">
    <a href="tareas" id="iniciar"><button type="button" class="btn btn-lg btn-block btn-success">Iniciar</button></a><br/>
    <a href="tareas" id="pausa"><button type="button" class="btn btn-lg btn-block btn-danger">Pausa</button></a><br/>
    <a href="tareas" id="terminado"><button type="button" class="btn btn-lg btn-block btn-secondary">Terminado</button></a><br/>
    </div>
@endsection