<?php
  require_once 'Operacion.php';
  require_once 'OperacionBasica.php';

  class Calcular implements Operacion, Operacion_basica {
    public function raizCuadrada(float $numero): float {
      return sqrt($numero);
    }

    public function potencia(int $numero, int $potencia): int {
      return pow($numero, $potencia);
    }

    public function op_basica(float $num1, float $num2, string $operacion) {
      switch ($operacion) {
        case '+':
          $result = $num1 + $num2;
          break;
        case '-':
          $result = $num1 - $num2;
          break;
        case '*':
          $result = $num1 * $num2;
          break;
        case '/':
          if ($num2 != 0) {
            $result = $num1 / $num2;
          } else {
            $result = "Error: División por cero.";
          }
          break;
        default:
          $result = "Error: Operación no válida.";
      }
      return $result;
    }
  }//End class Operacion
?>