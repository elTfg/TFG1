<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <style>
    .cuerpo {
      background-color: #d1d7de;
    }

    .titulo{
      text-align: center;
      padding-top: 10%;
      margin-bottom: -3%;
      font-size: 50pt;
    }

    .container {
      width: 100%;
      max-width: 330px;
      margin-top: 5%;
      border-radius: 3%;
      background-color: #f2f8ff;
    }
    
    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
}
    </style>
  </head>
  <body class="cuerpo">
    <h1 class="titulo">Proyectate</h1>
    <div class="container">
      <form class="form-signin text-center">
        <div class="form-group"><br/>
          <h5>Para continuar inicie sesión</h5><br/>
          <input type="text" class="form-control" id="inputUser" aria-describedby="entrada de usuario" placeholder="usuario">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="inputPassword" aria-describedby="entrada de contraseña" placeholder="contraseña">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form> 
    </div>
  </body>
</html>