<?php
  require_once '../controllers/Empleado.php';
  require_once '../controllers/Cliente.php';
  use controllers\Empleado;
  use controllers\Cliente;

  $objEmpleado = new Empleado(12345678, "Juan Perez", 30);
  $objEmpleado->setPuesto("Administrador");
  echo $objEmpleado->getDatosPersonales();
  echo "Puesto: " . $objEmpleado->getPuesto();

  $objCliente = new Cliente(34567890, "Elena Castillo", 25);
  $objCliente->setCredito(5000);
  echo $objCliente->getDatosPersonales();
  echo "Crédito: " . $objCliente->getCredito();

?>