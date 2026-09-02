<?php
  require_once("ClassTienda.php");
  
  $objProducto = new Tienda();

  $producto = "Coca cola Litro";
  $precio = 5500;
  $stock = 10;
  $cantidad = 2;

  $objProducto->setProducto($producto, $precio, $stock);
  echo $objProducto->getProducto();

  $objProducto->setCarrito($producto, $cantidad);
  $objProducto->setStock($cantidad);
  echo $objProducto->getProducto();
  echo $objProducto->getCarrito();
?>