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

    #atras{
      position: absolute;
      top:10%;
      left:15%;
      text-decoration:none;
    }
</style> 



@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Historial</h1>
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
        <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Tarea 1</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <li>Descripción del proyecto, aquí tendremos que poner una breve descripción del proyecto, no se que más poner para rellenar texto asi que yo sigo escribiendo</li>
              </ul>
              <a href="historial-tarea" id="boton-proyecto"><button type="button" class="btn btn-lg btn-block btn-primary">Ver tarea</button></a>
            </div>
          </div>
          <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Tarea 2</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <li>Descripción del proyecto, aquí tendremos que poner una breve descripción del proyecto, no se que más poner para rellenar texto asi que yo sigo escribiendo</li>
              </ul>
              <a href="historial-tarea" id="boton-proyecto"><button type="button" class="btn btn-lg btn-block btn-primary">Ver tarea</button></a>
            </div>
          </div>
          <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Tarea 3</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mt-3 mb-4">
                <li>Descripción del proyecto, aquí tendremos que poner una breve descripción del proyecto, no se que más poner para rellenar texto asi que yo sigo escribiendo</li>
              </ul>
              <a href="historial-tarea" id="boton-proyecto"><button type="button" class="btn btn-lg btn-block btn-primary">Ver tarea</button></a>
            </div>
          </div>
          <a href="historial" id="atras"><button type="button" class="btn btn-lg btn-block btn-primary">Atras</button></a>
    </div>
@endsection