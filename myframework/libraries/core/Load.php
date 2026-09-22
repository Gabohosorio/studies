<?php
  $controller = ucwords($controller);
  $controllerFile = "Controllers/".$controller.".php";
  if(file_exists($controllerFile)){
    //Parte 4
    //echo "Se encontró el controlador: " . $controllerFile . "<br>";
    require_once($controllerFile);
    $controller = new $controller();
    if(method_exists($controller, $method)){
      $controller->{$method}($params);
    }else{
      echo "El método no existe";
    }
  }else{
    echo "El controlador no existe";
  }  
?>