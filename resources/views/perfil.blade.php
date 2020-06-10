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

    #div-arriba{
        color: white;
        text-decoration:none;
    }

    .img-thumbnail{
      position: absolute;
      top: 15%;
    }
    
    #data{
      position: absolute;
      top: 15%;
      left: 50%;
    }

    #notas{
      position: absolute;
      top: 50%;
    }
</style> 



@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Perfil</h1>
@endsection

@section('unnombre')
  
  <div class="container" id="proyectos-historial">
    <div id="div-arriba">
      <img src="{{ asset('/img/avatar.png') }}" alt="perfil.png" class="img-thumbnail">
    </div>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <ul class="list-unstyled mt-3 mb-4" id="data">
          <li>Nombre:</li><br/>
          <li>Apodo:</li><br/>
          <li>Extensión:</li><br/>
          <li>Email:</li><br/>
        </ul>
    </div>
    <div class="card-deck mb-3 text-center" id="notas">
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