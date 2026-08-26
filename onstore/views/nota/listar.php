<h1>Listado de notas</h1>
<?php while($reg = $notas->fetch_object()): ?>
  <?=$reg->titulo_nota?> - <?=$reg->fecha_nota?><br/>
<?php endwhile;?>