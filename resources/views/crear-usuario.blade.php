@extends('plantilla')
<style>
    
    .container{
    height: auto;
    }

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

    #notas {
      text-align:right;
    }
</style> 



@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Usuarios</h1>
@endsection

@section('unnombre')
  
  <div class="container" id="proyectos-historial">
    <div class="card-deck mb-3 text-center justify-content-center">
      <div class="d-inline card mb-4 shadow-sm" id="proyecto-historial">
        <div class="card-body">
          <div class="contenido">
            <div class="crear-notas">
               <p class="notas">Nombre:</p>
               <input type="text" id="nombre" name="nombre"><br/>
               <p class="notas">Apodo:</p>
               <input type="text" id="nombre" name="nombre"><br/>
               <p class="notas">Email:</p>
               <input type="text" id="nombre" name="nombre"><br/>
               <br/>
               <button type="button" class="btn btn-success">Aceptar</button>
               <button type="button" class="btn btn-danger">Cancelar</button>
            </div>
          </div>
        </div>
      </div>    
    </div>
  </div>
  
@endsection