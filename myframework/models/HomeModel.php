<?php
  class HomeModel{
    public function __construct(){

    }

    //Forma 1
    // public function mensaje(){
    //   return "Hola desde HomeModel";
    // }

    //Forma 2
    public function mensaje($params){
      return "Datos: " . $params;
    }

  }//End class HomeModel
?>