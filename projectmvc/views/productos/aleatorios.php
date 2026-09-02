<!-- Catálogo de Productos - Aleatorios -->
<div class="Conthcc">
  <?php while($data = $productos->fetch_object()): ?>
    <div class="product">
      <img src="<?=base_url?>assets/productos/<?=$data->ruta_imagen?>">
      <h3><?=$data->nombre_producto?></h3>
      <p>Hora: <?=$data->alquiler_hora_producto?></p>
      <p>Día: <?=$data->alquiler_dia_producto?></p>
      <a href="#" class="Bt1">Alquilar</a>
    </div>
  <?php endwhile; ?>
</div>