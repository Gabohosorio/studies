<?php
  class Cliente extends Controllers{
    
    public function __construct()
    { parent::__construct();
    }

    public function cliente($id){
      echo "Extrae información del cliente".$id;
    }

    public function registro(){
      echo "Registro de clientes";
    }

    public function todos(){
      echo "Extrae todos los clientes";
    }

    public function actualizar($id){
      echo "Actualiza la información del cliente".$id;
    }

    public function eliminar($id){
      echo "Elimina el cliente".$id;
    }

  }//End class Home
?>