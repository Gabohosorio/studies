<?php
  namespace Models;

  class Persona {
    public $intDpi;
    public $strNombre;
    public $intEdad;

    public function __construct(int $dpi, string $nombre, int $edad) {
        $this->intDpi = $dpi;
        $this->strNombre = $nombre;
        $this->intEdad = $edad;
    }

    public function getDatosPersonales() {
        $datos = "
          <h2>DATOS PERSONALES</h2>
          DPI: {$this->intDpi}<br>
          NOMBRE: {$this->strNombre}<br>
          EDAD: {$this->intEdad}<br>
        ";
        return $datos;
    }

  }//End class Persona
?>