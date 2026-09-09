<!-- Section 60 - Video 242 -->
<h3>Proyecto MVC</h3>
<?php
  require_once 'controllers/usuarioController.php';

  //Forma 1
  //$controller = new UsuarioController();
  // $controller->getAll();
  // $controller->create();

  //Forma 2
  // $controller = new UsuarioController();
  // if(isset($_GET['action'])){
  //   $action = $_GET['action'];
  //   $controller->$action(); // $controller->getAll();
  // } //else{ Esta captuar no funciona, porque si existe un action
    //echo "La página solicitada no se encuentra";
  //}

  //Forma 3
  //http://localhost/studies/basemvc/?action=getAll
  // $controller = new UsuarioController();
  // if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){
  //   $action = $_GET['action'];
  //   $controller->$action(); // $controller->getAll();
  // }else{
  //   echo "La página solicitada no se encuentra";
  // }

  //Forma 4
  //http://localhost/studies/basemvc/?controller=usuarioController&action=getAll
  if(isset($_GET['controller']) && class_exists($_GET['controller'])){ //verifica el controlador
    $nameController = $_GET['controller'];
    $controller = new $nameController(); //$controller = new UsuarioController();
    if(isset($_GET['action']) && method_exists($controller, $_GET['action'])){ //verifica el método
      $action = $_GET['action'];
      $controller->$action();
    }else{
      echo "La página solicitada no se encuentra";
    }
  }else{
    echo "La página solicitada no se encuentra";
  }
  

?>