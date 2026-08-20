<?php
  session_start();
  require_once 'config/parameters.php';
  require_once 'backend/productos.php';
  $producto = new Producto();
  $datos = $producto->saveProduct();
  if($datos === true){
    $_SESSION['msgok'] = "Producto registrado correctamente.";
    require_once 'views/header.php';
    require_once 'views/success.php';
  }else{
    $_SESSION['Page'] = "/views/crearproducto.php";
    require_once 'views/header.php';
    require_once 'views/error.php';
  }
?>