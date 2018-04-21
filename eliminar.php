<?php

session_start();
include_once('conexion.php');

$id = $_COOKIE['id'];



$query1 = "UPDATE usuarios SET id_estado = '2' WHERE id_usuario = ".$id;

$queryEliminar = $mysqli->query($query1);





if ($queryEliminar) {
	echo "<script type='text/javascript'>alert('El usuario ha sido eliminado');
	window.location.href = 'administrador.php';

	</script>";
	//header('Location: administrador.php');

} else {
	die('ERROR: No se pudo eliminar al usuario.'.$mysqli->error);
	echo "<br><br><a href='index.php'>Volver</a>";
}


?>