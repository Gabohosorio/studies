<?php
  require_once("ClassOperacion.php");

  $operacion = new Operacion(10, 5); // Crear una instancia de la clase Operacion con valores 10 y 5
  $suma = $operacion->getSuma();
  $resta = $operacion->getResta();
  $multiplicacion = $operacion->getMultiplicacion();
  $division = $operacion->getDivision();

  echo "Suma: " . $suma . "<br>";
  echo "Resta: " . $resta . "<br>";
  echo "Multiplicación: " . $multiplicacion . "<br>";
  echo "División: " . $division . "<br>";
?>