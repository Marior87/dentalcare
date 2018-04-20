<?php


include_once('conexion.php');

$usuario = $_POST['user'];
$correo = $_POST['email'];
$contrasena = $_POST['pass'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$rol = $_POST['tipo'];
$estado = '1';

if ($sexo == 'mujer'){
	$s = 1;
} else {
	$s = 2;
}

if ($rol == 'cliente'){
	$r = 1;
} else {
	$r = 2;
}


$queryInsertar = $mysqli->query("INSERT INTO usuarios (id_usuario, usuario, correo, contrasena, nombre, apellido, direccion, edad, id_sexo, id_rol, id_estado) 
								VALUES (NULL, '$usuario', '$correo', '$contrasena', '$nombre', '$apellido', '$direccion', '$edad','$s','$r','$estado')");

if ($queryInsertar) {
	echo "<span class = 'succes'><br><br>Datos Registrados Exitosamente<br><br></span>";
	echo "<br><br><a href='index.php'>Volver</a>";

} else {
	die('ERROR: No se puede ejecutar query para insertar datos.'.$mysqli->error);
}


?>