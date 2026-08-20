<?php
  require_once "ClassUsuario.php";
  
  $objUsuario1 = new Usuario("Juan Cordoba", "juan@info.com", "Admin");
  $objUsuario2 = new Usuario("Maria Perez", "maria@info.com", "Cliente");
  echo $objUsuario1->getPerfil() . "<br><br>";
  echo $objUsuario2->getPerfil() . "<br>";
  $objUsuario2->setCambioClave("1234qwer");
  echo "<br><br>" . $objUsuario2->getPerfil() . "<br>";

?>