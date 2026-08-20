<?php
class Usuario {
    private $nombre;
    private $email;
    private $tipo;
    private $clave;
    protected $fechaRegistro;
    static $estado = "Activo";

    public function __construct(string $nombre, string $email, string $tipo) {
      $this->nombre = $nombre;
      $this->email = $email;
      $this->tipo = $tipo;
      $this->clave = rand(1000, 9999);
      $this->fechaRegistro = date("Y-m-d H:m:s");
    }

    public function getNombre(): string {
      return $this->nombre;
    }

    public function getEmail(): string {
      return $this->email;
    }

    public function getTipo(): string {
      return $this->tipo;
    }

    public function getPerfil() {
      echo "Datos del usuario: <br>";
      echo "Nombre: " . $this->nombre . "<br>";
      echo "Email: " . $this->email . "<br>";
      echo "Tipo: " . $this->tipo . "<br>";
      echo "Clave: " . $this->clave . "<br>";
      echo "Fecha de Registro: " . $this->fechaRegistro . "<br>";
      echo "Estado: " . self::$estado . "<br>";
    }

    public function setCambioClave(string $nClave) {
      $this->clave = $nClave;
    }

}//End class Usuario
?>