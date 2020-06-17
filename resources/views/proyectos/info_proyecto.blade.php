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
    <div class="card-deck mb-3 text-center">
        <div>
            <h2>Descripcion del proyecto:</h2>
            <p>{{$proyecto->descripcion_larga}}</p>
        </div>
    </div>
    <a href="../proyectos/inicio" id="atras"><button type="button" class="btn btn-lg btn-block btn-primary">Atras</button></a>
@endsection