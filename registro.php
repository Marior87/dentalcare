<?php
  session_start();

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
    <form action="index.php" id="register-form" autocomplete="off" method="POST">
        <input type="text" name="user" placeholder="Usuario" id="idUser">
        <input type="text" name="email" placeholder="Correo Electrónico" id="idEmail">
        <div class="contPassword">
        <input type="password" name="pass" placeholder="Constraseña" id="password" class="password">
        <input type="password" name="pass2" placeholder="Repita su Contraseña" id="password2" class="password">
        </div>
        <input type="text" name="nombre" placeholder="Nombre" id="idNombre">
        <input type="text" name="apellido" placeholder="Apellido" id="idApellido">
        <input type="text" name="direccion" placeholder="Dirección" id="direccion">
        <input type="number" name="edad" placeholder="Edad" id="nombre">
        <div class="contChoices">
        <div class="contSexo">
        <select name="sexo" class="sexo" id="sexo">
          <option value="hombre">HOMBRE</option>
          <option value="mujer">MUJER</option>
        </select>
        </div>
        <div class="contRadio">
        <div class="radioCont">
        <label for="idCliente">Cliente</label>
        <input type="radio" value="cliente" name="tipo" id="idCliente" class="radio">
        </div>
        <div class="radioCont">
        <label for="idProfesional">Odontólogo</label>
        <input type="radio" value="profesional" name="tipo" id="idProfesional" class="radio">
        </div>
        </div>
        </div>
        <input type="submit" name="login" class="login login-submit" value="Registrarse" id="submit">

    </form>
  

  <div class="login-help">
    <a href="iniciar.php">Iniciar Sesión</a>
  </div>
</div>
</div>
<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="js/validate.js"></script>
</body>
</html>