<?php
  require_once 'ClassOperacion.php';

  $objOperar = new Calcular();
  echo "Raiz cuadrada de 25: " . $objOperar->raizCuadrada(25) . "<br>";
  echo "Potencia de 4 elevado a 3: " . $objOperar->potencia(4, 3) . "<br>";
  echo "Suma de 10 y 5: " . $objOperar->op_basica(10, 5, '/') . "<br>";
?>