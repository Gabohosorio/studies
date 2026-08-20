<?php
  $nameuser = $_SESSION['user'] ?? "invalid";
  $admin = $_SESSION['rol'] ?? "invalid";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba Vr1,0</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
    <link rel="shortcut icon" href="<?=base_url?>assets/images/onlineshop48.png">
</head>
<body>
  <!--Cabecera-->
  <header class="Conthcj">
    <div class="Conthcl">
      <img class="ImgLog2" src="<?=base_url?>assets/images/onlineshop48.png"
       style="margin-left: 20px; margin-right: 20px;">
      <h3 style="Color: #845cb1ff">Tienda Online</h3>
    </div>
    <div class="Conthcr">
      <!-- Verifica si se ha iniciado sesión -->
      <?php if($nameuser != "invalid"): ?>
        <h7 style="margin-right: 15px;">Hola <?=$nameuser ?></h7>
        <h5><a href="<?=base_url?>logout.php">Logout</a></h5>
      <?php else: ?>
        <h4><a href="<?=base_url?>login.php">Login</a></h4>
      <?php endif; ?>
      <!-- Fin verifcación sesión -->
      <img src="<?=base_url?>assets/images/avatar48.png"
       style="margin-left: 20px; margin-right: 20px;">
    </div>
  </header>
  <!--Fin Cabecera-->

  <!--Menu-->
  <nav id="menu" class="Conthcl">
    <ul>
      <li><a href="<?=base_url?>">Inicio</a></li>
      <li><a href="#">Clientes</a></li>
      <?php if($admin == 1): ?>
        <li><a href="<?=base_url?>views/productos.php">Productos</a></li>
      <?php endif; ?>
      <li><a href="#">Usuarios</a></li>
    </ul>
  </nav>
  <!--Fin Menu--> 
<!-- </body>
</html> -->