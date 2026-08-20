<?php
  session_start();
  require_once 'config/parameters.php';
  if(isset($_SESSION['user'])){
    $_SESSION['user'] = null;
    unset($_SESSION['user']);
  }
  if(isset($_SESSION['rol'])){
    $_SESSION['rol'] = null;
    unset($_SESSION['rol']);
  }
  //require_once 'views/header.php';
  header("Location: ".base_url);
?>