<?php

session_start();
include_once('conexion.php');

if (!$_SESSION['rol'] == 'administrador'){
	header("Location: index.php");
} else {

	$query = "SELECT * FROM usuarios";
	$queryBuscar = $mysqli->query($query);

    if ($queryBuscar) {

	echo "<table border=".'1'.">

			<th>id_usuario</th><th>Usuario</th><th>Correo</th><th>Contraseña</th><th>Nombre</th><th>Apellido</th><th>Direccion</th><th>Edad</th><th>Sexo</th><th>Rol</th><th>Estado</th>";

        while($fila = mysqli_fetch_array($queryBuscar)){


		$id_ = $fila['id_usuario'];
		$usuario_ = $fila['usuario'];
		$correo_ = $fila['correo'];
		$contrasena_ = $fila['contrasena'];
		$nombre_ = $fila['nombre'];
		$apellido_ = $fila['apellido'];
		$direccion_ = $fila['direccion'];
		$edad_ = $fila['edad'];
		$id_sexo_ = $fila['id_sexo'];
		$id_rol_ = $fila['id_rol'];
		$id_estado_ = $fila['id_estado'];

		if ($id_estado_ == 1){
				echo "<tr>
			<td>".$id_."</td><td>".$usuario_."</td><td>".$correo_."</td><td>".$contrasena_."</td><td>".$nombre_."</td><td>".$apellido_."</td><td>".$direccion_."</td><td>".$edad_."</td><td>".$id_sexo_."</td><td>".$id_rol_."</td><td>".$id_estado_."</td><td><input type='button' value='Editar' onclick='modificar(".$id_.")'></td>";
		}

        }

}


echo "<center>

<input type='button' name='reporte' value='Generar Reporte'>

</center>";


}
?>







<script type="text/javascript">

	function modificar(id){
		document.cookie = 'id='+id;
		window.location.href = 'formMod.php';
	}



</script>
