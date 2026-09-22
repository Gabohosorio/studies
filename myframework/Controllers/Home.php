<?php
  //Forma 1
  //require_once('Models/HomeModel.php');
  //class Home{

  //Forma 2
  class Home extends Controllers{
    
    public function __construct()
    { //Forma 1
      //$modelo = new HomeModel();
      //echo $modelo->mensaje();

      //Forma 2
      parent::__construct();
    }

    public function home($params){
      //Forma 1
      //echo "Bienvendio a la página de inicio";

      //Forma 3
      //$nombre = "Pedro Ramirez";

      //Forma 5
      $data['page_tag'] = "Home";
      $data['page_title'] = "Página principal - Pedro Ramírez";
      $data['page_name'] = "home";

      $data['datosPersonales'] = $this->model->datosPersonales();

      //Forma 4
      $this->views->getView($this, "home", $data);
    }

    //Formas 1 y 2
    // public function datos($params){
    //   //Forma 1
    //   //echo "Datos: " . $params;

    //   //Forma 2
    //   $mensaje = $this->model->mensaje($params);
    //   echo $mensaje;
    // }

  }//End class Home
?>