<?php
  class Cliente extends Controllers{
    
    public function __construct()
    { parent::__construct();
    }

    public function cliente($id){
      echo "Extrae información del cliente: ".$id;
    }

    public function todos(){
      echo "Extrae todos los clientes";
    }

    public function registro(){
      try{ //dep($_SERVER);
        $method = $_SERVER['REQUEST_METHOD'];
        $response = [];
        if($method == "POST"){
          $data = json_decode(file_get_contents('php://input'), true);
          if(empty($data['identificacion'])){
            $response = array('status' => false, 'msg' => 'Identificación requerida');
            jsonResponse($response, 200); die();
          }
          if(empty($data['nombres']) or !testString($data['nombres'])){
            $response = array('status' => false, 'msg' => 'Error en los nombres');
            jsonResponse($response, 200); die();
          }
          if(empty($data['apellidos']) or !testString($data['apellidos'])){
            $response = array('status' => false, 'msg' => 'Error en los apellidos');
            jsonResponse($response, 200); die();
          }
          if(empty($data['telefono']) or !testEntero($data['telefono'])){
            $response = array('status' => false, 'msg' => 'Error en el teléfono');
            jsonResponse($response, 200); die();
          }
          if(empty($data['email']) or !testEmail($data['email'])){
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
          
          if($request > 0){
            $arrCliente = array('idcliente' => $request,
                                'identificacion' => $strIdentificacion,
                                'nombres' => $strNombres,
                                'apellidos' => $strApellidos,
                                'telefono' => $intTelefono,
                                'email' => $strEmail,
                                'direccion' => $strDireccion,
                                'nit' => $strNit,
                                'nombreFiscal' => $strNomFiscal,
                                'direccionFiscal' => $strDirFiscal
                                );
            $response = array('status' => true, 'msg' => 'Datos guardados correctamente',
                              'data' => $arrCliente);
            $code = 200;
          }else{
            $response = array('status' => false, 'msg' => 'Identificación o Email ya existe');
            $code = 409;
          }
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

    public function actualizar($id){
      try{
        $method = $_SERVER['REQUEST_METHOD'];
        $response = [];
        if($method == "PUT"){
          $data = json_decode(file_get_contents('php://input'), true);
          if(empty($id) or !is_numeric($id)){
            $response = array('status' => false, 'msg' => 'Error en el Id enviado');
            $code = 406; jsonResponse($response, $code); die();
          }
          if(empty($data['identificacion'])){
            $response = array('status' => false, 'msg' => 'Identificación requerida');
            jsonResponse($response, 200); die();
          }
          if(empty($data['nombres']) or !testString($data['nombres'])){
            $response = array('status' => false, 'msg' => 'Error en los nombres');
            jsonResponse($response, 200); die();
          }
          if(empty($data['apellidos']) or !testString($data['apellidos'])){
            $response = array('status' => false, 'msg' => 'Error en los apellidos');
            jsonResponse($response, 200); die();
          }
          if(empty($data['telefono']) or !testEntero($data['telefono'])){
            $response = array('status' => false, 'msg' => 'Error en el teléfono');
            jsonResponse($response, 200); die();
          }
          if(empty($data['email']) or !testEmail($data['email'])){
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

          $request = $this->model->putCliente($id, $strIdentificacion, $strNombres, $strApellidos, 
                     $intTelefono, $strEmail, $strDireccion, $strNit, $strNomFiscal, $strDirFiscal);

          $response = array('status' => true, 'msg' => 'Datos guardados correctamente', 'data' => "");
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

    public function eliminar($id){
      echo "Elimina el cliente".$id;
    }

  }//End class Home
?>