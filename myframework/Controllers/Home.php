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

    public function home(){
      //Forma 1
      //echo "Bienvendio a la página de inicio";

      //Forma 3
      $this->views->getView($this, "home");
    }

    public function datos($params){
      //Forma 1
      //echo "Datos: " . $params;

      //Forma 2
      $mensaje = $this->model->mensaje($params);
      echo $mensaje;
    }

  }//End class Home
?>