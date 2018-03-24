<?php
function usuarios(){
  return [
  [
    'usuario' => 'Virginia',
    'correo'      => 'virginialabarca92@gmail.com',
    'password'  => 'a123456',
    'nombre'      => 'Virginia',
    'apellido' => 'Labarca',
    'direccion' => 'La Trinidad',
    'edad' => 25,
    'sexo' => 'mujer',
    'tipousuario' => 'odontologo',
  ],
  [
    'usuario' => 'Mario',
    'correo'      => 'mariorivas87@gmail.com',
    'password'  => 'b456789',
    'nombre'      => 'Mario',
    'apellido' => 'Rivas',
    'direccion' => 'El Varillal',
    'edad' => 24,
    'sexo' => 'hombre',
    'tipousuario' => 'paciente',
  ],
 ];
}

function buscarUsuario($usuario, $password){
  $usuario_dentro_arreglo = null;
  $usuarios = usuarios();
  foreach ($usuarios as $key => $user) {
    if($user['usuario']== $usuario && $user['password']== $password){
      //$usuario_dentro_arreglo = $key;
      return $user;
    }
  }
  return 777;
}

?>
