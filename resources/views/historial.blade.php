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

    #boton-proyecto{
        color: white;
        text-decoration:none;
    }

</style> 



@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Historial</h1>
@endsection

@section('unnombre')
  
  <div class="container" id="proyectos-historial">
    <div class="card-deck mb-3 text-center">
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Proyecto 1</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Descripción del proyecto, aquí tendremos que poner una breve descripción del proyecto, no se que más poner para rellenar texto asi que yo sigo escribiendo</li>
          </ul>
          <a href="historial-proyecto" id="boton-proyecto"><button type="button" class="btn btn-lg btn-block btn-primary">Ver proyecto</button></a>
        </div>
      </div>
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Proyecto 2</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Descripción del proyecto, aquí tendremos que poner una breve descripción del proyecto, no se que más poner para rellenar texto asi que yo sigo escribiendo</li>
          </ul>
          <a href="historial-proyecto" id="boton-proyecto"><button type="button" class="btn btn-lg btn-block btn-primary">Ver proyecto</button></a>
        </div>
      </div>
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Proyecto 3</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Descripción del proyecto, aquí tendremos que poner una breve descripción del proyecto, no se que más poner para rellenar texto asi que yo sigo escribiendo</li>
          </ul>
          <a href="historial-proyecto" id="boton-proyecto"><button type="button" class="btn btn-lg btn-block btn-primary">Ver proyecto</button></a>
        </div>
      </div>
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Proyecto 4</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Descripción del proyecto, aquí tendremos que poner una breve descripción del proyecto, no se que más poner para rellenar texto asi que yo sigo escribiendo</li>
          </ul>
          <a href="historial-proyecto" id="boton-proyecto"><button type="button" class="btn btn-lg btn-block btn-primary">Ver proyecto</button></a>
        </div>
      </div>
      
    </div>
  </div>
  
@endsection