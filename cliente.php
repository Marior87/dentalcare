<?php
    session_start();

    include_once('conexion.php');

    $id_cliente = $_SESSION['id_usuario'];
    $query = "SELECT * FROM tratamiento WHERE id_cliente = '".$id_cliente."'";
    $queryBuscar = $mysqli->query($query);

    if ($queryBuscar) {

    $i = 1;

    $tratamiento = array();
    $patologia = array();

    while($fila = mysqli_fetch_array($queryBuscar)){

        $tratamiento[$i] = $fila['tratamiento'];
        $patologia[$i] =  $fila['patologia'];
        $i = $i + 1;

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dental Care</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/iniciadoCliente.css">

</head>
<body>
   <div class="contenedor">
    <div class="login-card">
    <h1>Mi Perfil</h1><br>
    <div class="contImg">
    <img src="img/perfil1.jpg" alt="">
    </div>
    <div class="contenedorIniciado">
    <h3 class="nombreIniciado">Nombre y Apellido</h3><span><?php echo $_SESSION['nombre']." ".$_SESSION['apellido']?></span>
    </div>
    <div class="contenedorIniciado">
    <h3 class="edadIniciado">Edad</h3><span><?php echo $_SESSION['edad']?></span>
    </div>
    <div class="contenedorIniciado">
    <h3 class="patologiaIniciado">Patología</h3><span><?php 

        foreach ($patologia as $key => $value) {
            echo $value;
            echo "<br>";
        }


          ?></span>
    </div>
     <div class="contenedorIniciado">
    
    <h3 class="trabajoIniciado">Tratamiento Pendiente</h3><span><?php 

        foreach ($tratamiento as $key => $value) {
            echo $value;
            echo "<br>";
        }


          ?></span>
    

    <br><br><br>
    <center>
    <form enctype="multipart/form-data" action="subirarchivo.php" method="POST">
    <label for="file">Subir nueva Foto</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="500000">
    <input type="file" name="subir-archivo" id="file" accept=".jpg, .jpeg, .png">
    <input type="submit" value="Subir Archivo">
    </form>
    </center>
    <a href="index.php">Volver al Inicio</a>
    
    </div>
</div>
</div>
</body>
</html>