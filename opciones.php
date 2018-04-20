<?php
session_start();
$rol = $_SESSION['rol'];


switch ($rol) {
	case 'cliente':
		header('Location: cliente.php');
		break;
	case 'odontologo':
		header('Location: odontologo.php');
		break;
	case 'administrador':
		header('Location: administrador.php');
		break;

}





?>