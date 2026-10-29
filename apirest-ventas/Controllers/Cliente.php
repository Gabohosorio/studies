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

    // // Forma 4
    // public function registro(){
    //   try{
    //     $method = $_SERVER['REQUEST_METHOD'];
    //     $response = [];
    //     if($method == "POST"){
    //       //dep($_POST);
    //       //exit;
    //       $data = file_get_contents('php://input');
    //       $data = json_decode($data, true);
    //       //dep($data);
    //       echo "Identificación: " . $data['identificacion'];
    //       exit;
    //       $response = array('status' => true, 'msg' => 'Datos guardados correctamente');
    //       $code = 200;
    //     }else{
    //       $response = array('status' => false, 'msg' => 'Error en la solicitud '.$method);
    //       $code = 400;
    //     }
    //     jsonResponse($response, $code);
    //     die();
    //   }catch(Exception $er){
    //     echo "Error: ". $er->getMessage();
    //   }
    //   die();
    // }

    // // Forma 5
    // public function registro(){
    //   try{
    //     $method = $_SERVER['REQUEST_METHOD'];
    //     $response = [];
    //     if($method == "POST"){
    //       $data = json_decode(file_get_contents('php://input'), true);
    //       //dep($data['nombres']);
    //       dep(testString($data['nombres']));
    //       dep(testEntero($data['telefono']));
    //       dep(testEmail($data['email']));
    //       if(!testString($data['nombres']) or !testEntero($data['telefono']) or !testEmail($data['email'])){
    //         echo "Error en los datos";
    //       }
    //       dep($data);
    //       exit;
    //       $response = array('status' => true, 'msg' => 'Datos guardados correctamente');
    //       $code = 200;
    //     }else{
    //       $response = array('status' => false, 'msg' => 'Error en la solicitud '.$method);
    //       $code = 400;
    //     }
    //     jsonResponse($response, $code);
    //     die();
    //   }catch(Exception $er){
    //     echo "Error: ". $er->getMessage();
    //   }
    //   die();
    // }

    // Forma 6
    public function registro(){
      try{
        $method = $_SERVER['REQUEST_METHOD'];
        $response = [];
        if($method == "POST"){
          $data = json_decode(file_get_contents('php://input'), true);
          if(empty($data['identificacion'])){
            $response = array('status' => false, 'msg' => 'Identificación requerida');
            jsonResponse($response, 200); die();
          }
          if(!testString($data['nombres'])){
            $response = array('status' => false, 'msg' => 'Error en los nombres');
            jsonResponse($response, 200); die();
          }
          if(!testString($data['apellidos'])){
            $response = array('status' => false, 'msg' => 'Error en los apellidos');
            jsonResponse($response, 200); die();
          }
          if(!testEntero($data['telefono'])){
            $response = array('status' => false, 'msg' => 'Error en el teléfono');
            jsonResponse($response, 200); die();
          }
          if(!testEmail($data['email'])){
            $response = array('status' => false, 'msg' => 'Error en el email');
            jsonResponse($response, 200); die();
          }
          if(empty($data['direccion'])){
            $response = array('status' => false, 'msg' => 'Dirección requerida');
            jsonResponse($response, 200); die();
          }
          $strIdentificacion = $data['identificacion'];
          $strNombres = ucwords(strtolower($data['nombres']));
          $strApellidos = ucwords(strtolower($data['apellidos']));
          $intTelefono = $data['telefono'];
          $strEmail = strtolower($data['email']);
          $strDireccion = $data['direccion'];
          $strNit = !empty($data['nit']) ? strClean($data['nit']) : "";
          $strNomFiscal = !empty($data['nombreFiscal']) ? strClean($data['nombreFiscal']) : "";
          $strDirFiscal = !empty($data['direccionFiscal']) ? strClean($data['direccionFiscal']) : "";

          $request = $this->model->setCliente($strIdentificacion, $strNombres, $strApellidos,
                     $intTelefono, $strEmail, $strDireccion, $strNit, $strNomFiscal, $strDirFiscal);
          
          //dep($data);
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