<?php
    include("con_db.php");
    $datos="SELECT * FROM datos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Editar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar</title>
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
                            <label for="contraseña" class="sr-only">Contraseña</label>
                            <input type="password" id="contraseña" placeholder="Contraseña" class="form-control">
                            <div class="checkbox">
                            <label>
                                <input type="checkbox" value="Recuerdame">Recuerdame
                            </label>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            <p>¿No tienes cuenta?</p>
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
    <div id="nuevoB">
        <div class="container-table container-table--edit">
            <div class="table_title table_title--edit">Tabla contactos</div>
            <div class="table_header">Nombre</div>
            <div class="table_header">Apellidos</div>
            <div class="table_header">Rut</div>
            <div class="table_header">Direccion</div>
            <div class="table_header">Edad</div>
            <div class="table_header">Genero</div>
            <div class="table_header">Email</div>
            <div class="table_header">Operacion</div>
            <?php $resultado = mysqli_query($conex,$datos);
            while($row=mysqli_fetch_assoc($resultado)) {?>
                <div class="table_item"><?php echo $row["nombre"]?></div>
                <div class="table_item"><?php echo $row["apellidos"]?></div>
                <div class="table_item"><?php echo $row["rut"]?></div>
                <div class="table_item"><?php echo $row["direccion"]?></div>
                <div class="table_item"><?php echo $row["edad"]?></div>
                <div class="table_item"><?php echo $row["genero"]?></div>
                <div class="table_item"><?php echo $row["email"]?></div>
                <div class="table_item">
                    <a href="Actualizar.php?id=<?php echo $row["id"]?>" class="table_item_link1">Editar</a> |
                    <a href="Eliminar.php?id=<?php echo $row["id"]?>" class="table_item_link">Eliminar</a>
                </div>
                <?php } mysqli_free_result($resultado);?>
        </div>
        <script src="Confirmacion.js"></script>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>