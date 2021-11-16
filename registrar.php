<?php 
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos']) >= 1 && strlen($_POST['rut']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['genero']) && strlen($_POST['contraseña'])) {
	    $nombre = trim($_POST['nombre']);
		$apellidos = trim($_POST['apellidos']);
		$contraseña = trim($_POST['contraseña']);
		$rut = trim($_POST['rut']);
		$direccion = trim($_POST['direccion']);
		$edad = trim($_POST['edad']);
		$genero = trim($_POST['genero']);
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, apellidos, contraseña, rut, direccion, edad, genero, email, fecha) VALUES ('$nombre','$apellidos','$contraseña','$rut','$direccion','$edad','$genero','$email','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>