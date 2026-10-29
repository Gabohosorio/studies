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

      $this->strIdentificacion = $identificacion;
      $this->strNombres = $nombres;
      $this->strApellidos = $apellidos;
      $this->intTelefono = $telefono;
      $this->strEmail = $email;
      $this->strDireccion = $direccion;
      $this->strNit = $nit;
      $this->strNomFiscal = $nomFiscal;
      $this->strDirFiscal = $dirFiscal;
      dep(get_object_vars($this));

    }

  }//End class ClienteModel
?>