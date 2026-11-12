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

      $sql  = "Select identificacion, email From cliente Where ";
      $sql .= "(email = :email Or identificacion = :ident) and status = :estado ";
      $params = array(":email" => $this->strEmail,
                      ":ident" => $this->strIdentificacion,
                      ":estado" => 1);
      $request = $this->getOne($sql, $params);

      if(!empty($request)){
        return false;
      }else{
        $sql =  "Insert Into cliente(identificacion, nombres, apellidos, telefono, ";
        $sql .= "email, direccion, nit, nombrefiscal, direccionfiscal) Values";
        $sql .= "(:ident, :nom, :ape, :tel, :email, :dir, :nit, :nomfiscal, :dirfiscal)";
        $data = array(":ident" => $this->strIdentificacion,
                      ":nom" => $this->strNombres,
                      ":ape" => $this->strApellidos,
                      ":tel" => $this->intTelefono,
                      ":email" => $this->strEmail,
                      ":dir" => $this->strDireccion,
                      ":nit" => $this->strNit,
                      ":nomfiscal" => $this->strNomFiscal,
                      ":dirfiscal" => $this->strDirFiscal
                    );
        $id_insert = $this->insert($sql, $data);
        return $id_insert;
        // dep($data);
        // exit;
      }
    }

    public function putCliente(string $identificacion, string $nombres, string $apellidos,
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

      $sql  = "Select identificacion, email From cliente Where ";
      $sql .= "(email = :email Or identificacion = :ident) and status = :estado ";
      $params = array(":email" => $this->strEmail,
                      ":ident" => $this->strIdentificacion,
                      ":estado" => 1);
      $request = $this->getOne($sql, $params);

      if(!empty($request)){
        return false;
      }else{
        $sql =  "Insert Into cliente(identificacion, nombres, apellidos, telefono, ";
        $sql .= "email, direccion, nit, nombrefiscal, direccionfiscal) Values";
        $sql .= "(:ident, :nom, :ape, :tel, :email, :dir, :nit, :nomfiscal, :dirfiscal)";
        $data = array(":ident" => $this->strIdentificacion,
                      ":nom" => $this->strNombres,
                      ":ape" => $this->strApellidos,
                      ":tel" => $this->intTelefono,
                      ":email" => $this->strEmail,
                      ":dir" => $this->strDireccion,
                      ":nit" => $this->strNit,
                      ":nomfiscal" => $this->strNomFiscal,
                      ":dirfiscal" => $this->strDirFiscal
                    );
        $id_insert = $this->insert($sql, $data);
        return $id_insert;
        // dep($data);
        // exit;
      }
    }

  }//End class ClienteModel
?>