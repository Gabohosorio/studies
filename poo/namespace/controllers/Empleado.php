<?php
  namespace Controllers;
  require_once '../models/Persona.php';
  use models\Persona;
  
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