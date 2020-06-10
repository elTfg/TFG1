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
</style> 



@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Notas</h1>
@endsection

@section('unnombre')
  
  <div class="container" id="proyectos-historial">
    <div id="test">
    <a href="crear-nota" id="crear-nota"><button type="button" class="btn btn-lg btn-block btn-primary">Crear nota</button></a>
    </div>
    <div class="card-deck mb-3 text-center">
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Descripción del proyecto, aquí tendremos que poner una breve descripción del proyecto, no se que más poner para rellenar texto asi que yo sigo escribiendo</li>
          </ul>
        </div>
      </div>
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Descripción del proyecto, aquí tendremos que poner una breve descripción del proyecto, no se que más poner para rellenar texto asi que yo sigo escribiendo</li>
          </ul>
        </div>
      </div>
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-body">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Descripción del proyecto, aquí tendremos que poner una breve descripción del proyecto, no se que más poner para rellenar texto asi que yo sigo escribiendo</li>
          </ul>
        </div>
      </div>    
    </div>
  </div>
  
@endsection