
<!-- Indicamos que se inicie una sesión -->
<?php
 session_start();
 if (isset($_POST['user'])){
 	$_SESSION['user'] = $_POST['user'];
 	setcookie('nombreUsuario',$_POST['user'],time()+86400,'/');
 	setcookie('passUsuario',$_POST['pass'],time()+86400,'/');
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dental Care</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/Fontastic/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Cairo:300|Open+Sans" rel="stylesheet">
</head>
<body>
   <!-- - - - - - - - - - - - - - -  MENU - - - - - - - -  - - - - - - -  -->
    <nav class="menu">
       <input type="checkbox" id="menu">
       <label for="menu" class="icon-bars"></label>
        <img src="img/logo.png" alt="" class="logo">
        <div class="contenedorMenu">
        <li class="menuItem"><a href="#inicio" class="menuLink">Inicio</a></li>
        <li class="menuItem"><a href="#nosotros" class="menuLink">Nosotros</a></li>
        <li class="menuItem"><a href="#servicios" class="menuLink">Servicios</a></li>
        <li class="menuItem"><a href="#trabajos" class="menuLink">Trabajos</a></li>
        <li class="menuItem"><a href="#contacto" class="menuLink">Contacto</a></li>


        <?php 

        if (!isset($_SESSION['user'])){
        	echo '<div class="contInicio">
        	            <li class="menuItem2"><a href="iniciar.php" class="menuLink2">Ingresar</a></li>
        	            <li class="menuItem2"><a href="registro.html" class="menuLink2">Registrarse</a></li>
        	        </div>
        	        </div>';

        } else {
        	//Usamos htmlentities para evitar html injection, cuando tengamos que acceder a alguna base de datos se debe
        	//sanitizar también de SQL injection...
        	echo '<div class="contInicio">
        	            <li class="menuItem2"><a href="perfil.php" class="menuLink2">Hola '.htmlentities($_SESSION['user']).'</a></li>
        	            <li class="menuItem2"><a href="cerrar-sesion.php" class="menuLink2">Cerrar Sesión</a></li>
        	        </div>
        	        </div>';

        }
        ?>
        
    </nav>

    <div class="contenedorPortada" id="inicio">
        <img src="img/portada.jpg" alt="" class="imgPortada">
        <h1 class="headerPortada">DENTAL CARE</h1>
        <p class="parrafoPortada">Sacando sonrisas inigualables desde 1995</p>
    </div>
    <div class="nosotros">
        <h2 class="headerNosotros" id="nosotros">NOSOTROS</h2>
        <div class="contenedorNosotros">
            <img src="img/nosotros.jpg" alt="" class="imgNosotros">
            <div class="contenedorHeader2">
                <h3 class="headerNosotros2">SOBRE NOSOTROS</h3>
                <p class="parrafoNosotros">Somos una empresa comprometida con tu salud, es por ello que con nosotros encontrarás a los mejores profesionales para atender tus necesidades específicas, contamos con los mejores ortodoncistas, periodoncistas y cirujanos maxilofacianles así como también contamos con los mejores equipos de última tecnología.</p>
            </div>
        </div>
    </div>

    <div class="servicio" id="servicios">
        <img src="img/LandingServicio.png" alt="" class="servicioLanding">
        <h2 class="headerServicio">SERVICIOS</h2>
        <div class="contenedorServicio">
            <img src="img/servicio1.jpg" alt="" class="imgServicio">
            <div class="contenedorHeader2">
                <h3 class="headerServicio2">RADIOLOGÍA</h3>
                <p class="parrafoServicio">Contamos con un amplio servicio de radiología dental digitalizada de última generación, ofrecemos a nuestros clientes la toma y evaluación de tomografías, radiografías panorámicas, cefálicas laterales, periapicales, oclusales, ATM y muchas más.</p>
            </div>
        </div>
        <div class="contenedorServicio2">
            <img src="img/slide001.png" alt="" class="imgServicio2">
            <div class="contenedorHeader3">
                <h3 class="headerServicio2">ODONTOPEDIATRÍA</h3>
                <p class="parrafoServicio">Nuestro servicio de odontopediatría es el más reconocido a nivel nacional. El equipo de trabajo que labora con nosotros posee una gran trayectoria siendo capaces de cubrir cualquier situación.</p>
            </div>
        </div>
         <div class="contenedorServicio">
            <div class="contenedorHeader2">
                <h3 class="headerServicio2">IMPLANTES DENTALES</h3>
                <p class="parrafoServicio">Los implantes dentales ofrecen al paciente seguir contando con una dentadura sana y estéticamente idéntica a la pieza original reemplazada. Para ello le ofrecemos todo el servicio de restauración, todo en un mismo local.</p>
            </div>
            <img src="img/servicio2.jpg" alt="" class="imgServicio">
        </div>
    </div>

    <h2 class="headerTrabajos" id="trabajos">TRABAJOS</h2>
  <div class="slider">
  <img class="mySlides" src="img/trabajo1.png" >
  <img class="mySlides" src="img/trabajo2.png" >
  <img class="mySlides" src="img/trabajo3.png" >
  <img class="mySlides" src="img/trabajo4.png" >
</div>

<div class="landingContacto" id="contacto">
<img src="img/implants.png" alt="" class="imgContacto">
</div>
<div class="Contacto">
    <h2 class="headerContacto">CONTÁCTENOS</h2>
    <div class="contenedorContacto">
        <div class="contactenos">
            <h3 class="headerContactenos">TELEFONOS</h3>
            <p class="parrafoContactenos">+58 414-6738785 <span> MARIA LABARCA </span></p>
            <p class="parrafoContactenos">+58 414-6242580 <span>STEFANO LAGATTOLLA </span></p>
            <p class="parrafoContactenos">+58 412-0744257 <span> MARIO RIVAS </span></p>
        </div>
        <div class="contactenos">
            <h3 class="headerContactenos">ADDRESS</h3>
            <p class="parrafoContactenos">Campus URBE. Prolongación Circunvalación No. 2 con Av. 16 Guajira, al lado de la Plaza de Toros. Maracaibo, Estado Zulia Venezuela.</p>
        </div>
        <div class="contactenos">
            <h3 class="headerContactenos">EMAIL</h3>
            <p class="parrafoContactenos">VIRGINIALABARCA92@GMAIL.COM</p>
            <p class="parrafoContactenos">STEFANOLAGATTOLLA.S@GMAIL.COM</p>
            <p class="parrafoContactenos">MARIORIVAS87@GMAIL.COM</p>
        </div>
    </div>
</div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.5265734943478!2d-71.63652048510875!3d10.693807792377628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e899ecd22a1b721%3A0xd2cfab5751fcd5cc!2sUniversidad+Privada+Dr.+Rafael+Belloso+Chac%C3%ADn+%5BURBE%5D!5e0!3m2!1ses-419!2sve!4v1521514063042" width="100%;" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>