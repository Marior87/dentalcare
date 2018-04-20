<?php

//$mysqli = new mysqli("localhost", "username", "password", "db_name");
$mysqli = new mysqli("localhost", "mario", "123", "dentalcare");
if ($mysqli->connect_error) {
die('ERROR: No se estableció la conexión. '.mysqli_connect_error());
}


?>