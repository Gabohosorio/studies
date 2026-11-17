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

    public function getCliente(int $id){
      $this->intIdCliente = $id;
      $sql = "Select * From cliente Where idcliente = :id";
      $params = array(":id" => $this->intIdCliente);
      $request = $this->getOne($sql, $params);
      return $request;
    }

    public function putCliente(int $idCliente, string $identificacion, string $nombres, 
                    string $apellidos, int $telefono, string $email, string $direccion, 
                    string $nit, string $nomFiscal, string $dirFiscal){
      $this->intIdCliente = $idCliente;
      $this->strIdentificacion = $identificacion;
      $this->strNombres = $nombres;
      $this->strApellidos = $apellidos;
      $this->intTelefono = $telefono;
      $this->strEmail = $email;
      $this->strDireccion = $direccion;
      $this->strNit = $nit;
      $this->strNomFiscal = $nomFiscal;
      $this->strDirFiscal = $dirFiscal;
      // dep(get_object_vars($this));
      // die();
      $sql  = "Select identificacion, email From cliente Where ";
      $sql .= "(email = :email And idcliente != :id) Or ";
      $sql .= "(identificacion = :ident And idcliente != :id) and status = 1";
      $params = array(":email" => $this->strEmail,
                      ":ident" => $this->strIdentificacion,
                      ":id" => $this->intIdCliente
                     );
      $request = $this->getOne($sql, $params);
      if(empty($request)){
        $sql =  "Update cliente Set identificacion = :ident, nombres = :nom, apellidos = :ape,
                 telefono = :tel, email = :email, direccion = :dir, nit = :nit, 
                 nombrefiscal = :nomfiscal, direccionfiscal = :dirfiscal Where idcliente = :id";
        $data = array(":ident" => $this->strIdentificacion,
                      ":nom" => $this->strNombres,
                      ":ape" => $this->strApellidos,
                      ":tel" => $this->intTelefono,
                      ":email" => $this->strEmail,
                      ":dir" => $this->strDireccion,
                      ":nit" => $this->strNit,
                      ":nomfiscal" => $this->strNomFiscal,
                      ":dirfiscal" => $this->strDirFiscal,
                      ":id" => $this->intIdCliente
                     );
        $request = $this->update($sql, $data);
        return $request;
      }else{
        return false;
      }
    }

  }//End class ClienteModel
?>