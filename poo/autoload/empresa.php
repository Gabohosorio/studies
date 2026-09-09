<?php
  // require_once 'ClassEmpleado.php';
  // require_once 'ClassCliente.php';
  require_once 'autoload.php';

  $objEmpleado = new Empleado(12345678, "Juan Perez", 30);
  $objEmpleado->setPuesto("Administrador");
  echo $objEmpleado->getDatosPersonales();
  echo "Puesto: " . $objEmpleado->getPuesto() . "<br><br>";

  $objCliente = new Cliente(34567890, "Elena Castillo", 25);
  $objCliente->setCredito(5000);
  echo $objCliente->getDatosPersonales();
  echo "Crédito: " . $objCliente->getCredito() . "<br><br>";

?>