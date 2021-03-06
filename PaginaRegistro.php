<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="PaginaRegistro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CliffPedia</title>
  </head>
<body>
  <!--Barra de navegacion-->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand mb-0 h1" href="PaginaPrincipalBootstrap.html"><img class="d-inline-block align-top" src="https://steamuserimages-a.akamaihd.net/ugc/91604190949969147/088A09E3C677498614C124ACE76365CBDF969000/?imw=268&imh=268&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" width="30" height="30"/>CliffPedia</a>
    <button class="navbar-toggler"type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">Menu</button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
              <a href="Yo.html" class="nav-link active">Yo</a>
          </li>
          <li class="nav-item active">
            <a href="Contacto.html" class="nav-link active">Contacto</a>
          </li>
          <li class="nav-item active">
            <a href="Historia.html" class="nav-link active">Historia</a>
          </li>
        </ul>
        <!--Modal-->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="justify-tracks: left;">
          Iniciar Sesion
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Inicio de Sesion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <form>
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/91604190949969147/088A09E3C677498614C124ACE76365CBDF969000/?imw=268&imh=268&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" height="72" alt="Logo">
                    <h1>Iniciar Sesion</h1>
                    <label for="correo" class="sr-only"></label>
                    <input type="email" id="correo" class="form-control" placeholder="Correo electronico" required autofocus>
                    <br>
                    <label for="contrase??a" class="sr-only">Contrase??a</label>
                    <input type="password" id="contrase??a" placeholder="Contrase??a" class="form-control">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="Recuerdame">Recuerdame
                      </label>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary">Iniciar Sesion</button>
                    </div>
                    <p>??No tienes cuenta?</p>
                    <input type="button" value="Registrate" onclick="location.href='//localhost/PHP/PaginaRegistro.php'">
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn-primary">Iniciar Sesion</button>
              </div>
            </div>
          </div>
        </div>
    <!--Modal-->
    </div>
  </nav>
  <!--Barra de navegacion-->
    
  <!--Banner-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="overlay-image" style="background-image: url(./foto_1.jpg);"></div>
        <div class="container">
        </div>
      </div>
      <div class="carousel-item">
        <div class="overlay-image" style="background-image: url(https://www.futuro.cl/wp-content/uploads/2021/02/c957e4ff2c1dafdfad0feb93c32e33d6-768x432.jpg);"></div>
        <div class="container">
        </div>
      </div> 
    </div>
    <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="sr-only">Previous</span>
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
      <span class="sr-only">Previous</span>
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>
  <!--Banner-->
  
  <!--Informacion-->
  <div id="nuevoB">
    <form class="container2" method="post">
        <h1>Registrate</h1>
        <input type="text" name="nombre" placeholder="Nombre">
        <br>
        <input type="text" name="apellidos" placeholder="Apellidos">
        <br>
        <input type="text" name="contrase??a" placeholder="Contrase??a">
        <br>
        <input type="text" name="rut" placeholder="Rut">
        <br>
        <input type="text" name="direccion" placeholder="Direccion">
        <br>
        <input type="text" name="edad" placeholder="Edad">
        <br>
        <label for="Genero"></label>
        <div>
          <label for="hombre" class="radio-inline"><input type="radio" name="genero" value="Hombre">Hombre</label>
          <label for="mujer" class="radio-inline"><input type="radio" name="genero" value="Mujer">Mujer</label>
          <label for="otros" class="radio-inline"><input type="radio" name="genero" value="Otros">Otros</label>
        </div>
        <input type="email" name="email" placeholder="Email">
        <br>
        <input type="submit" name="register">
        <br>
    </form>
  </div>
  <!--Informacion-->


  <!--Footer-->
  <footer id="top" class="bg-dark text-center text-white">
    <p class="fs-5 px-3  pt-3"></p>
    <div id="iconos">
      <a href="https://www.facebook.com/kjahsdjalkajsdiohuio/"><i class="fa fa-facebook fa-4x"></i></a>
      <a href="https://www.instagram.com/mctoallin123/"><i class="fa fa-instagram  fa-4x"></i></a>  
      <a href="https://www.twitch.tv/savagedawg1"><i class="fa fa-twitch fa-4x"></i></a> 
    </div>
      
      <!-- Copyright -->
  </footer>
    <!--Footer-->
  <?php 
      include("registrar.php");
      ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>