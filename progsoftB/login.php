<?php
  require_once 'config/parameters.php';
  require_once 'views/header.php'; 
?>
<!-- contenedor formulario login -->
<div class="Contptc Frm1">
  <form action="<?=base_url?>loginuser.php" class="Contvcc Frm2 Brd15"
   method="post" style="margin-top: 40px;">
    <br><h4>Iniciar Sesión</h4><br>
    <input type="text" name="cedula" placeholder="Cédula" required>
    <input type="password" name="clave" placeholder="Password" required>
    <div class="Conthcj" style="width: 65%; height: 60px; margin-top: 10px;">
      <input type="submit" class="Bt4b" value="Aceptar">
      <input type="button" class="Bt4r" value="Cancelar"
       onclick="location.href='<?=base_url?>'">
    </div>
    <br>
    <h7>No estás registrado?</h7>
    <h6><a href="<?=base_url?>registro.php">Registrate Aquí</a></h6><br>
  </form>
</div>
<!-- fin contenedor formulario login -->