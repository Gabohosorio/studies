<?php
  session_start();
  require_once 'config/parameters.php';
  require_once 'backend/usuarios.php';
  $usuario = new Usuario();
  $datos = $usuario->registrar();
  if($datos === true){
    $_SESSION['msgok'] = "Usuario registrado correctamente.";
    require_once 'views/header.php';
    require_once 'views/success.php';
    //header("Location: views/success.php");
  }else{
    $_SESSION['msgerror'] = "Error al registrar el usuario: ".$datos;
    require_once 'views/header.php';
    require_once 'views/error.php';
    //header("Location: views/error.php");
  }
?>