<?php
	session_start();
	include "datossesion.php"

	$ruta = "registros/";
	$ruta = $ruta.basename($_FILES['subir-archivo']['name']);



	if(move_uploaded_file($_FILES['subir-archivo']['tmp_name'],$ruta)){

		echo "
			<script type='text/javascript'>
				alert(El archivo ".basename($_FILES['subir-archivo']['name'])." ha sido subido exitosamente!);
			</script>
		";
		header("Location: index.php");
	}else{
		echo "
			<script type='text/javascript'>
				alert(El archivo ".basename($_FILES['subir-archivo']['name'])." no ha podido ser subido);
			</script>
		";
		redirigir($_SESSION['tipousuario']);
	}
?>