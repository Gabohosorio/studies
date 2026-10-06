<?php
  //Form 1, 2, 3
  //class HomeModel{
  //Form 4
  class HomeModel extends Mysql{
    public function __construct(){
      //Form 4
      parent::__construct(); //Hace conexión a la base de datos por herencia
    }

    //Forma 1
    // public function mensaje(){
    //   return "Hola desde HomeModel";
    // }

    //Forma 2
    // public function mensaje($params){
    //   return "Datos: " . $params;
    // }

    //Forma 7 se quita la function datosPersonales
    //Forma 3
    // public function datosPersonales(){
    //   $datos['nombre'] = 'Juan Pérez';
    //   $datos['email'] = 'juan@data.com';
    //   $datos['sitioweb'] = 'www.eljuan.com';
    //   return $datos; 
    // }

  }//End class HomeModel
?>