<?php
class Operacion {
  public $valor1=0;
  public $valor2=0;
  public $resultado=0;    

  public function __construct($v1, $v2) {
      $this->valor1 = $v1;
      $this->valor2 = $v2;
  }

  public function getSuma() {
      return $this->valor1 + $this->valor2;
  }

  public function getResta() {
      return $this->valor1 - $this->valor2;
  }

  public function getMultiplicacion() {
      return $this->valor1 * $this->valor2;
  }

  public function getDivision() {
      if ($this->valor2 != 0) {
          return $this->valor1 / $this->valor2;
      } else {
          return "Error: División por cero";
      }
  }
}//End class Operacion
?>