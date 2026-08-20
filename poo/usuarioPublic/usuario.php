<?php
  require_once "ClassUsuario.php";
  
  $objUsuario1 = new Usuario("Juan Cordoba", "juan@info.com", "Admin");
  echo "Nombre: " . $objUsuario1->nombre . "<br>";
  echo "Email: " . $objUsuario1->email . "<br>";
  echo "Tipo: " . $objUsuario1->tipo . "<br>";
  //echo "Clave: " . $objUsuario1->clave . "<br>";
  //echo "Fecha de Registro: " . $objUsuario1->fechaRegistro . "<br>";
  echo "Estado: " . $objUsuario1::$estado . "<br>"; //forma de acceder a un atributo static desde una instancia
  echo "Estado: " . Usuario::$estado . "<br>"; //forma de acceder a un atributo static desde la clase

?>