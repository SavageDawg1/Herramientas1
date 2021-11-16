<?php
include("con_db.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$rut = $_POST['rut'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];
$email = $_POST['email'];

//actualizar//
$actualizar = "UPDATE datos SET nombre='$nombre',apellidos='$apellidos',rut='$rut',direccion='$direccion',edad='$edad',email='$email',fecha='$fecha' WHERE id='$id'";

$resultado=mysqli_query($conex, $actualizar);

if ($resultado) { 
    echo "<script>alert('Se han guardado los cambios correctamente, actualice para ver cambios'); window.location='/PHP';</script>";
}else{
    echo "<script>alert('No se pudo registrar'); window.history.go(-1);</script>";
}