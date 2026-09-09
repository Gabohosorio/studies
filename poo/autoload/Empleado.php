<?php
  // require_once 'ClassPersona.php';
  require_once 'autoload.php';
  
  class Empleado extends Persona {
    protected $strPuesto;

    public function __construct(int $dpi, string $nombre, int $edad) {
      parent::__construct($dpi, $nombre, $edad);
    }

    public function setPuesto(string $puesto) {
      $this->strPuesto = $puesto;
    }

    public function getPuesto() {
      return $this->strPuesto;
    }

  }//End class Empleado
?>