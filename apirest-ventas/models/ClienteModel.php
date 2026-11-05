<?php
  class ClienteModel extends Mysql{
    private $intIdCliente;
    private $strIdentificacion;
    private $strNombres;
    private $strApellidos;
    private $intTelefono;
    private $strEmail;
    private $strDireccion;
    private $strNit;
    private $strNomFiscal;
    private $strDirFiscal;
    private $intStatus;
    
    public function __construct()
    { parent::__construct();
    }

    public function setCliente(string $identificacion, string $nombres, string $apellidos,
                    int $telefono, string $email, string $direccion, string $nit, 
                    string $nomFiscal, string $dirFiscal){
      //Parte 1 y Parte 2
      $this->strIdentificacion = $identificacion;
      $this->strNombres = $nombres;
      $this->strApellidos = $apellidos;
      $this->intTelefono = $telefono;
      $this->strEmail = $email;
      $this->strDireccion = $direccion;
      $this->strNit = $nit;
      $this->strNomFiscal = $nomFiscal;
      $this->strDirFiscal = $dirFiscal;

      //Parte 2
      $sql  = "Select identificacion, email From cliente Where ";
      $sql .= "(email = :email Or identificacion = :ident) and status = :estado ";
      $params = array(":email" => $this->strEmail,
                      ":ident" => $this->strIdentificacion,
                      ":estado" => 1);
      $request = $this->getOne($sql, $params);

      dep($request);
      
      //Parte 1
      // dep(get_object_vars($this));
      // die();

    }

  }//End class ClienteModel
?>