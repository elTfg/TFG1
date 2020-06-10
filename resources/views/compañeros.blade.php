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

    #circulo {
	width: 11rem;
	height: 11rem;
	border-radius: 50%;
	background: red;
	display: flex;
	justify-content: center;
	align-items: center;
	text-align: center;
  margin:4%;
}
</style> 



@section('cabecera')
    <h1 class="cabecera" id="texto_titulo">Compañeros</h1>
@endsection

@section('unnombre')
  
  <div class="container" id="proyectos-historial">
    <div class="card-deck mb-3 text-center">
      <div id="circulo">
        <a href="perfil"><img src="{{ asset('/img/avatar.png') }}" alt="perfil.png" class="rounded-circle border"></a>
      </div>
      <div id="circulo">
        <a href="perfil"><img src="{{ asset('/img/avatar.png') }}" alt="perfil.png" class="rounded-circle border"></a>
      </div>
      <div id="circulo">
        <a href="perfil"><img src="{{ asset('/img/avatar.png') }}" alt="perfil.png" class="rounded-circle border"></a>
      </div>
      <div id="circulo">
        <a href="perfil"><img src="{{ asset('/img/avatar.png') }}" alt="perfil.png" class="rounded-circle border"></a>
      </div>
      <div id="circulo">
        <a href="perfil"><img src="{{ asset('/img/avatar.png') }}" alt="perfil.png" class="rounded-circle border"></a>
      </div>
      <div id="circulo">
        <a href="perfil"><img src="{{ asset('/img/avatar.png') }}" alt="perfil.png" class="rounded-circle border"></a>
      </div>
      <div id="circulo">
        <a href="perfil"><img src="{{ asset('/img/avatar.png') }}" alt="perfil.png" class="rounded-circle border"></a>
      </div>
      <div id="circulo">
        <a href="perfil"><img src="{{ asset('/img/avatar.png') }}" alt="perfil.png" class="rounded-circle border"></a>
      </div>
    </div>
  </div>
  
@endsection