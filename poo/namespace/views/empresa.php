<?php
  // require_once '../controllers/Empleado.php'; //Forma 1
  // require_once '../controllers/Cliente.php'; //Forma 1
  // require_once '../controllers/Persona.php'; //Forma 1
  require_once '../autoload.php'; //Forma 2

  use controllers\Empleado;
  use controllers\Cliente;
  use controllers\Persona;

  $objEmpleado = new Empleado(12345678, "Juan Perez", 30);
  $objEmpleado->setPuesto("Administrador");
  echo $objEmpleado->getDatosPersonales();
  echo "Puesto: " . $objEmpleado->getPuesto();

  $objCliente = new Cliente(34567890, "Elena Castillo", 25);
  $objCliente->setCredito(5000);
  echo $objCliente->getDatosPersonales();
  echo "Crédito: " . $objCliente->getCredito();

  echo "<br><br><hr>";
  $mensaje = new Persona();
  echo $mensaje->saludar();

?>