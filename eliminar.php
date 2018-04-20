<?php

session_start();
include_once('conexion.php');

$id = $_COOKIE['id'];

// "DELETE FROM `usuarios` WHERE `usuarios`.`id_usuario` = 3"



$query1 = "UPDATE usuarios SET id_estado = '2' WHERE id_usuario = ".$id;

$queryEliminar = $mysqli->query($query1);





if ($queryEliminar) {
	echo "<span class = 'succes'><br><br>Usuario Eliminado Exitosamente<br><br></span>";
	header('Location: administrador.php');

} else {
	die('ERROR: No se pudo eliminar al usuario.'.$mysqli->error);
	echo "<br><br><a href='index.php'>Volver</a>";
}


?>