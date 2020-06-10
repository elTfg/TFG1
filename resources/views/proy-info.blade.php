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
    <h1 class="display-4">Proyecto X</h1>
    <ul class="list-unstyled mt-3 mb-4">
        <li>Fecha inicio prevista:</li>
        <li>Fecha final prevista:</li>
        <li>Estado:</li>
        <li>Creada por:</li>
      </ul>
  </div>
  
  <div class="container">
    <div class="card-deck mb-3 text-center">
        <div>
            <p>Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea Descripción de la tarea </p>
        </div>
    </div>
@endsection