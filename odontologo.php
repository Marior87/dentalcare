<?php
    session_start();
    include_once('conexion.php');

    $id_odontologo = $_SESSION['id_usuario'];

    $query = "SELECT id_cliente FROM tratamiento WHERE id_odontologo = ".$id_odontologo;

    $queryBuscar = $mysqli->query($query);

    if ($queryBuscar) {

        $i = 1;

        $clientes = array();

        while($fila = mysqli_fetch_array($queryBuscar)){

            $clientes[$i] = $fila['id_cliente'];
            $i = $i + 1;

        }

}


    function agregarPaciente($id_cliente){
        $mysqli = new mysqli("localhost", "mario", "123", "dentalcare");
        if ($mysqli->connect_error) {
        die('ERROR: No se estableció la conexión. '.mysqli_connect_error());
        }

        $query2 = "SELECT * FROM usuarios WHERE id_usuario = ".$id_cliente;
        $queryBuscar2 = $mysqli->query($query2);

        if ($queryBuscar2) {
            $fila = mysqli_fetch_array($queryBuscar2);
            $nombre = $fila['nombre'];
            $apellido = $fila['apellido'];
            $edad = $fila['edad'];
            $sexo = $fila['id_sexo'];
        }

        $query3 = "SELECT * FROM tratamiento WHERE id_cliente = ".$id_cliente;
        $queryBuscar3 = $mysqli->query($query3);

        if ($queryBuscar3) {
            $fila = mysqli_fetch_array($queryBuscar3);
            $patologia = $fila['patologia'];
            $tratamiento = $fila['tratamiento'];
        }


        if ($sexo == 1){
            $s = 2;
        } else {
            $s = 1;
        }


        echo "<div class='login-card'>
                <div class='contImg'>
                <img src='img/perfil".$s.".jpg' alt=''>
                </div>
                <div class='contenedorIniciado'>
                <h3 class='nombreIniciado'>Nombre y Apellido Paciente</h3><span>".$nombre." ".$apellido."</span>
                </div>
                <div class='contenedorIniciado'>
                <h3 class='edadIniciado'>Edad</h3><span>".$edad."</span>
                </div>
                <div class='contenedorIniciado'>
                <h3 class='patologiaIniciado'>Patología</h3><span>".$patologia."</span>
                </div>
                 <div class='contenedorIniciado'>
                <h3 class='trabajoIniciado'>Tratamiento Pendiente</h3><span>".$tratamiento."</span>
                </div>
            </div>";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dental Care</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/iniciadoCliente2.css">
</head>
<body>
 <div class="contTitulo">
  <h1 class="paciente"><?php echo "Od. ".$_SESSION['nombre']." ".$_SESSION['apellido'];?></h1><br>
  </div>
   <div class="contenedor">

    <?php

    foreach ($clientes as $key => $value) {
        agregarPaciente($value);
    }
    ?>

</div>
<div class="contenedorIniciado">
    <center>
    <form enctype="multipart/form-data" action="subirarchivo.php" method="POST">
    <label>Incluir Nuevo Paciente</label>
    <br>
    <input type="hidden" name="MAX_FILE_SIZE" value="400000">
    <input type="file" name="subir-archivo" class="login login-submit" id="file" accept=".json">
    <input type="submit" value="Subir Archivo">
    </form>
    </center>
    <a href="index.php">Volver al Inicio</a>
</div>
</body>
</html>