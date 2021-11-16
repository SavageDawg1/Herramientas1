<?php
include("con_db.php");
$id = $_GET['id'];
$eliminar="DELETE FROM datos WHERE id='$id'";

$resultadoEliminar = mysqli_query($conex, $eliminar);

if ($resultadoEliminar) { 
    header("Location: Editar.php");
}else{
    echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
}