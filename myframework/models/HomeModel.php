<?php
  class HomeModel{
    public function __construct(){

    }

    //Forma 1
    // public function mensaje(){
    //   return "Hola desde HomeModel";
    // }

    //Forma 2
    // public function mensaje($params){
    //   return "Datos: " . $params;
    // }

    //Forma 3
    public function datosPersonales(){
      $datos['nombre'] = 'Juan Pérez';
      $datos['email'] = 'juan@data.com';
      $datos['sitioweb'] = 'www.eljuan.com';
      return $datos; 
    }

  }//End class HomeModel
?>