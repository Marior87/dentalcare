<?php

session_start();
include_once('conexion.php');
$id = $_COOKIE['id'];

$query = "SELECT * FROM usuarios WHERE id_usuario = ".$id;
$queryBuscar = $mysqli->query($query);

if ($queryBuscar){

	$fila = mysqli_fetch_array($queryBuscar);
		$usuario = $fila['usuario'];
		$correo = $fila['correo'];
		$contrasena = $fila['contrasena'];
		$nombre = $fila['nombre'];
		$apellido = $fila['apellido'];
		$direccion = $fila['direccion'];
		$edad = $fila['edad'];
		$id_sexo = $fila['id_sexo'];
		$id_rol = $fila['id_rol'];
		$id_estado = $fila['id_estado'];


	switch ($fila['id_rol']) {
		case '1':
			$rol = 'cliente';
			break;
		case '2':
			$rol = 'odontologo';
			break;
		case '3':
			$rol = 'administrador';
			break;
	}

	switch ($_SESSION['id_sexo']) {
		case '1':
			$sexo = 'mujer';
			break;
		case '2':
			$sexo= 'hombre';
			break;
	}

	$query2 = "SELECT * FROM tratamiento WHERE id_cliente = ".$id;
	$queryBuscar2 = $mysqli->query($query2);

	if ($queryBuscar2){
		$fila2 = mysqli_fetch_array($queryBuscar2);
		$_SESSION['id_tratamiento'] = $fila2['id_tratamiento'];
		$tratamiento = $fila2['tratamiento'];
		$patologia = $fila2['patologia'];
		$id_odontologo = $fila2['id_odontologo'];
	}
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dental Care</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
   <div class="contenedor">
    <div class="login-card">
    <h1>Regístrate</h1><br>
    
    <!-- Se redirecciona a la página de inicio al no tener conexión a una base de datos que alimentar -->
    <form action="modificar.php" id="register-form" autocomplete="off" method="POST">
        <input type="text" name="user" placeholder="Usuario" id="idUser" value=<?php echo $usuario; ?>>
        <input type="text" name="email" placeholder="Correo Electrónico" id="idEmail" value=<?php echo $correo; ?>>
        <div class="contPassword">
        <input type="password" name="pass" placeholder="Contraseña" id="password" class="password" value=<?php echo $contrasena; ?>>
        <input type="password" name="pass2" placeholder="Repita su Contraseña" id="password2" class="password" value=<?php echo $contrasena; ?>>
        </div>
        <input type="text" name="nombre" placeholder="Nombre" id="idNombre" value=<?php echo $nombre; ?>>
        <input type="text" name="apellido" placeholder="Apellido" id="idApellido" value=<?php echo $apellido; ?>>
        <input type="text" name="direccion" placeholder="Dirección" id="direccion" value=<?php echo $direccion; ?>>
        <input type="number" name="edad" placeholder="Edad" id="nombre" value=<?php echo $edad; ?>>
        <div class="contChoices">
        <div class="contSexo">
        <select name="sexo" class="sexo" id="sexo" value=<?php echo $sexo; ?>>
          <option value="hombre">HOMBRE</option>
          <option value="mujer">MUJER</option>
        </select>
        </div>
        </div>
        <label for="rol">Rol:</label>
        <input type="number" name="rol" placeholder="Rol" max="3" min="1" id="idNombre" value=<?php echo $id_rol; ?>>
        <label for="estado">Estado:</label>
        <input type="number" name="estado" placeholder="Estado" max="2" min="1" id="idNombre" value=<?php echo $id_estado; ?>>

<?php

	if ($id == 1) {
		
		echo "
	        <label for='tratamiento'>Tratamiento:</label>
			<input type='text' name='tratamiento' placeholder='Tratamiento' id='tratamiento' value = '".$tratamiento."'>
	        <label for='patologia'>Patologia:</label>		
	        <input type='text' name='patologia' placeholder='Patologia' id='patologia' value= $patologia>
	        <label for='Odontologo'>Id del Odontologo:</label>
	        <input type='text' name='odontologo' placeholder='Odontologo' id='odontologo' value= $id_odontologo>


		";

	}


?>







        <input type="submit" name="login" class="login login-submit" value="Modificar" id="submit">
        <center>
        <input type="button" class="login login-submit" value="Eliminar" onclick=<?php echo "'eliminar(".$id.")'" ?>>
		</center>
    </form>
  
</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="js/validate.js"></script>


<script type="text/javascript">

	function eliminar(id){

		var conf = window.confirm("¿Realmente desea eliminar a este usuario?");

		if (conf == true){
			document.cookie = 'id='+id;
			window.location.href = 'eliminar.php';
		}


	}


</script>









</body>
</html>