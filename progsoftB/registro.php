<?php
  require_once 'config/parameters.php';
  require_once 'views/header.php'; 
?>
<!-- contenedor formulario registro -->
<div class="Contptc Frm1">
  <form action="registroadd.php" class="Contvcc Frm2 Brd15"
   method="post" style="margin-top: 40px;">
    <br><h4>Registro</h4><br>
    <input type="text" name="cedula" placeholder="Cédula" required>
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="email" placeholder="E-mail" required>
    <input type="text" name="direccion" placeholder="Dirección" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <input type="password" name="clave" placeholder="Password" required>
    <br>
    <div class="Conthcj" style="width: 75%; height: 60px;">
      <input type="submit" class="Bt4b" value="Registrarse">
      <input type="button" class="Bt4r" value="Cancelar"
       onclick="location.href='<?=base_url?>'">
    </div>
  </form>
</div>