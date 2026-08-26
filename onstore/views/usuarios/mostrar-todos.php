<h1>Listado de Usuarios</h1>
<?php while($reg = $all_users->fetch_object()): ?>
  <?=$reg->nombre_usuario?> - <?=$reg->fecha_usuario?><br/>
<?php endwhile;?>