<?php
  session_start();
  /*
  if (!isset($_COOKIE['nombreUsuario']) || !isset($_COOKIE['passUsuario'])){
      $placeholderUser = "";
    $placeholderPass = "";
  } else {
    $placeholderUser = $_COOKIE['nombreUsuario'];
    $placeholderPass = $_COOKIE['passUsuario'];
  }*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dental Care</title>
    <link rel="stylesheet" href="css/iniciar.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
   <div class="contenedor">
    <div class="login-card">
    <h1>Iniciar Sesión</h1><br> 
  <form action="iniciarsesion.php" method="POST" autocomplete="off">
    <?php
      echo '<input type="text" name="user" autocomplete="off" placeholder="Usuario">';
      echo '<input type="password" name="pass" placeholder="Contraseña">';
    ?>
    <input type="submit" name="login" class="login login-submit" value="Iniciar Sesión">
  </form>
  <div class="login-help">
    <a href="registro.php">Registráte</a>
  </div>
</div>
</div>
</body>
</html>