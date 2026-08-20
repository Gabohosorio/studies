<?php
class Usuario {
    //public = se puede acceder desde cualquier instancia
    //private = solo se puede acceder desde la clase
    //protected = se puede acceder desde la misma clase y clases que la hereden
    //static = tiene un valor inicial que no va a cambiar
    public $nombre;
    public $email;
    public $tipo;
    private $clave;
    protected $fechaRegistro;
    static $estado = "Activo";

    public function __construct(string $nombre, string $email, string $tipo) {
      //$this = "Esta clase"
      $this->nombre = $nombre;
      $this->email = $email;
      $this->tipo = $tipo;
      $this->clave = rand(1000, 9999);
      $this->fechaRegistro = date("Y-m-d H:i:s");
    }

}//End class Usuario
?>