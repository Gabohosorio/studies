<?php
  class Controllers{
    public function __construct(){
      //Parte 2
      $this->views = new Views();
      //Parte 1
      $this->loadModel();
    }

    public function loadModel(){
      //HomeModel
      $model = get_class($this)."Model";
      $routClass = "models/".$model.".php"; // models/HomeModel.php
      if(file_exists($routClass)){
        require_once($routClass);
        $this->model = new $model();
      }
    }
  }//End class Controllers
?>