<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PROYECTATE</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Proyectate </div>
      <div class="list-group list-group-flush">
        <a href="/proyectos-activos" class="list-group-item list-group-item-action bg-light">Proyectos Activos</a>
        <a href="/administracion" class="list-group-item list-group-item-action bg-light">Administración</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Estadísticas</a>
        <a href="proy-info" class="list-group-item list-group-item-action bg-light">Información del proyecto</a>
        <a href="/compañeros" class="list-group-item list-group-item-action bg-light">Compañeros</a>
        <a href="/tareas" class="list-group-item list-group-item-action bg-light">Tareas</a>
        <a href="/notas" class="list-group-item list-group-item-action bg-light">Mis notas</a>
        <a href="/perfil" class="list-group-item list-group-item-action bg-light">Perfil</a>
        <a href="/historial" class="list-group-item list-group-item-action bg-light">Historial</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>-->
        <div class="d-inline-flex p-2 bd-highlight justify-content-center" id="titulo_navbar">
            @yield('cabecera')
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <button type="button" class="btn btn-outline-danger" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Salir') }}</button> <!-- boton logout rojo-->
              
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>

            <!--
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="unnombre">
          @yield('unnombre')
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
