<!-- Parte 1 -->
<!-- <h3>Bienvenido</h3>
<h4>Framework Propio</h4> -->

<!-- Parte 2 -->
<?php
  $url = !empty($_GET['url']) ? $_GET['url']: "home/home";
  $arrUrl = explode('/', $url);
  $controller = $arrUrl[0];
  $method = $arrUrl[0];
  $params = "";
  if(!empty($arrUrl[1])){
    if($arrUrl[1] != ""){
      $method = $arrUrl[1];
    }
  }
  // Parte 3
  if(!empty($arrUrl[2]) && $arrUrl[2] != ""){
    for($k=2; $k<count($arrUrl); $k++){
      $params .= $arrUrl[$k].",";
    }
    $params = rtrim($params, ',');
  }

  //Parte 5
  spl_autoload_register(function($class){
    if(file_exists("libraries/core/".$class.".php")){
      require_once("libraries/core/".$class.".php");
    }
  });

  //Parte 4
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
  
  //Parte 3 
  // echo "Controller: " . $controller . "<br>";
  // echo "Metodo: " . $method . "<br>";
  // echo "Parámetros: " . $params . "<br>";

  // print_r($arrUrl);
?>