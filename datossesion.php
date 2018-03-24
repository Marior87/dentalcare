<?php
  include 'arrayusers.php';
?>

<?php

  function redirigir($tipousuario){
    if ($tipousuario=='odontologo'){
      header("Location: sesionIniciadaProfesional.html");
    } elseif ($tipousuario=='paciente'){
      header("Location: sesionIniciadaCliente.html");
    } else {
      header("Location: 404.html");
    }


  }



   if(isset($_POST['user']) && isset($_POST['pass'])){
     $usuario = $_POST['user'];
     $password = $_POST['pass'];

     $datos_usuario = buscarUsuario($usuario, $password);
     if($datos_usuario == 777){
       header("Location: 404.html");
     }else{
       session_start();
       $_SESSION['usuario'] = $usuario;
       $_SESSION['tipousuario'] = $datos_usuario['tipousuario'];
       redirigir($_SESSION['tipousuario']);
      }
    }


       /*
       if($datos_usuario['tipousuario']=='odontologo'){
          header("Location: sesionIniciadaProfesional.html");
       }elseif($datos_usuario['tipousuario']=='paciente'){
          header("Location: sesionIniciadaCliente.html");
       }

     }
   }else {
     echo 'Formulario no enviado';
   }*/
?>