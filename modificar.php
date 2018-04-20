<?php

session_start();
include_once('conexion.php');

$id = $_COOKIE['id'];

$usuario = $_POST['user'];
$correo = $_POST['email'];
$contrasena = $_POST['pass'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$rol = $_POST['rol'];
$estado = $_POST['estado'];

if ($sexo == 'mujer') {
	$s = 1;
} else {
	$s = 2;
}


$id_tratamiento = $_SESSION['id_tratamiento'];
$tratamiento = $_POST['tratamiento'];
$patologia = $_POST['patologia'];
$id_od = $_POST['odontologo'];


$query1 = "UPDATE usuarios SET usuario = '".$usuario."', correo = '".$correo."', contrasena = '".$contrasena."', nombre = '".$nombre."', apellido = '".$apellido."', direccion = '".$direccion."', edad = '".$edad."', id_sexo = '".$s."', id_rol = '".$rol."', id_estado = '".$estado."' WHERE id_usuario = ".$id;

$queryModificar1 = $mysqli->query($query1);


$query2 = "UPDATE tratamiento SET patologia = '".$patologia."', tratamiento = '".$tratamiento."', id_cliente = '".$id."', id_odontologo = '".$id_od."' WHERE id_tratamiento = ".$id_tratamiento;

$queryModificar2 = $mysqli->query($query2);


if ($queryModificar1 && $queryModificar2) {
	echo "<span class = 'succes'><br><br>Datos Modificados Exitosamente<br><br></span>";
	header('Location: administrador.php');

} else {
	die('ERROR: No se pudieron modificar los datos.'.$mysqli->error);
	echo "<br><br><a href='index.php'>Volver</a>";
}


?>