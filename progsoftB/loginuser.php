<?php
  session_start();
  require_once 'config/parameters.php';
  require_once 'backend/usuarios.php';
  $usuario = new Usuario();
  $datos = $usuario->login();
  if($datos && is_object($datos)){
    $_SESSION['msgok'] = "Hola: " . $datos->nombre_usuario;
    require_once 'views/header.php';
    require_once 'views/success.php';
  }else{
    $_SESSION['msgerror'] = "Error en los datos: ".$datos;
    require_once 'views/header.php';
    require_once 'views/error.php';
  }
?>