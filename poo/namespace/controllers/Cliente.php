<?php
  namespace Controllers;
  require_once '../models/Persona.php';
  use models\Persona;
  
  class Cliente extends Persona {
    protected $fltCredito;

    public function __construct(int $dpi, string $nombre, int $edad) {
      parent::__construct($dpi, $nombre, $edad);
    }

    public function setCredito(float $credito) {
      $this->fltCredito = $credito;
    }

    public function getCredito() {
      return $this->fltCredito;
    }
    
  }//End class Cliente
?>