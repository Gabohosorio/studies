<?php
  require_once("ClassMesa.php");

  $objCama = new Producto("Cama", 15000.00);
  $arrInfoProducto = $objCama->getInfoProducto();

  echo "<pre>";
  print_r($arrInfoProducto);
  echo "</pre>";

  $objMueble = new Mueble("Silla", 5000.00, "Negro", "Madera");
  $arrInfoMueble = $objMueble->getInfoProducto();
  
  print_r("<pre>");
  print_r($arrInfoMueble);
  print_r("</pre>");

  $objMesa = new Mesa("Mesa de comedor", 8000.00, "Blanco", "Madera", "Grande");
  //acceder a la propiedad strForma de la clase ClassMesa
  // $objMesa->strForma = "Redonda";
  $objMesa->setForma("Rectangular");
  //acceder a la propiedad strStatus de la clase ClassMueble
  $objMesa->strStatus = "Disponible";
  $arrInfoMesa = $objMesa->getInfoProducto();

  print_r("<pre>");
  print_r($arrInfoMesa);
  print_r("</pre>");
?>