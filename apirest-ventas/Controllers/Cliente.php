<?php
  class Cliente extends Controllers{
    
    public function __construct()
    { parent::__construct();
    }

    public function cliente($id){
      echo "Extrae información del cliente".$id;
    }

    // Forma 1
    // public function registro(){
    //   echo "Registro de clientes";
    // }

    // Forma 2
    // public function registro(){
    //   try{
    //     $method = $_SERVER['REQUEST_METHOD'];
    //     //echo $method; //muestra el tipo de método request
    //     if($method == "POST"){
    //       echo "Realizar el proceso";
    //     }else{
    //       echo "Error en tipo de método";
    //     }
    //   }catch(Exception $er){
    //     echo "Error: ". $er->getMessage();
    //   }
    // }

    // Forma 3
    // public function registro(){
    //   try{
    //     //dep($_SERVER);
    //     //exit;
    //     $method = $_SERVER['REQUEST_METHOD'];
    //     $response = [];
    //     if($method == "POST"){
    //       $response = array('status' => true, 'msg' => 'Datos guardados correctamente');
    //       $code = 200;
    //     }else{
    //       $response = array('status' => false, 'msg' => 'Error en la solicitud '.$method);
    //       $code = 400;
    //     }
    //     // esto se pasa al helper para reutilizar el código
    //     // header("HTTP/1.1 ".$code); //Status code response
    //     // header("Content-Type: application/json");
    //     // echo json_encode($response, true);
    //     jsonResponse($response, $code);
    //     die();
    //   }catch(Exception $er){
    //     echo "Error: ". $er->getMessage();
    //   }
    //   die();
    // }

    // Forma 4
    public function registro(){
      try{
        $method = $_SERVER['REQUEST_METHOD'];
        $response = [];
        if($method == "POST"){
          //dep($_POST);
          //exit;
          $data = file_get_contents('php://input');
          $data = json_decode($data, true);
          //dep($data);
          echo "Identificación: " . $data['identificacion'];
          exit;
          $response = array('status' => true, 'msg' => 'Datos guardados correctamente');
          $code = 200;
        }else{
          $response = array('status' => false, 'msg' => 'Error en la solicitud '.$method);
          $code = 400;
        }
        jsonResponse($response, $code);
        die();
      }catch(Exception $er){
        echo "Error: ". $er->getMessage();
      }
      die();
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