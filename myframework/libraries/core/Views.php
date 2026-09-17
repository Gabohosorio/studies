<?php
  class Views{
    function getView($controller, $view, $data=""){
      $controller = get_class($controller);
      if($controller == "Home"){
        $view = "views/".$view.".php"; // views/home.php
      }else{
        $view = "views/".$controller."/".$view.".php"; // views/cliente/cliente.php
      }
      require_once ($view);
    }
  }
?>