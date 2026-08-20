<?php
  session_start();
  require_once __DIR__ . '/../config/parameters.php';
  require_once __DIR__ . '/../views/header.php';
  require_once __DIR__ . '/../backend/Productos.php';
  $producto = new Producto();
  $productos = $producto->getAll();
?>
<!-- contenedor tabla productos -->
<div class="Contptc" style="width: 90%;">
  <div class="Contvcc" style="width: 100%;">
    <div class="Contvcc" style="width: 100%;">
      <h3 style="margin-bottom: 10px;">Gestión de productos</h3>
      <hr width="70%">
    </div>
    <div class="Conthcl" style="width: 70%; margin-bottom: 5px;">
      <a class="Bt4b" href="<?=base_url?>views/crearproducto.php" style="margin-left: 10px;">Crear producto</a>
      <a class="Bt4r" href="<?=base_url?>" style="margin-left: 10px;">Volver</a>
    </div>
    <div class="Contvtc" style="width: 70%;">
      <table>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>PRECIO</th>
          <th>IMAGEN</th>
          <th>ACCIONES</th>
        </tr>
        <?php while($pro = $productos->fetch_object()): ?>
          <tr>
            <td><?= $pro->id_producto; ?></td>
            <td><?= $pro->nombre_producto; ?></td>
            <td><?= $pro->valor_producto; ?></td>
            <td><img class="Img60Auto" src="<?= base_url ?>assets/products/<?= $pro->nombre_imagen ?>"></td>
            <td style="width: 150px;">
              <div class="Conthcs">
                <a href="#" class="Bt2">Editar</a>
                <a href="#" class="Bt2r">Eliminar</a>
              </div>
            </td>
          </tr>
        <?php endwhile; ?>
      </table>
    </div>
  </div>
</div>
<!-- fin contenedor tabla productos -->