<?php
  session_start();
  require_once __DIR__ . '/../config/parameters.php';
  require_once __DIR__ . '/../views/header.php';
  require_once __DIR__ . '/../backend/Productos.php';
  $producto = new Producto();
  $marcas = $producto->getMarcas();
  if(isset($_SESSION['Product'])){
    $pro = $_SESSION['Product'];
    unset($_SESSION['Product']);
  }else{
    $pro = null;
  }
?>
<!-- Formulario para crear/editar productos -->
<div class="Contptc" style="width: 90%;">
  <div class="Contvcc" style="width: 100%;">
    <div class="Contvcc" style="width: 100%;">
      <?php if(isset($edit) && isset($pro) && is_object($pro)): ?>
        <h3>Editar producto <?= $pro->nombre ?></h3>
        <?php $url_action = base_url.'producto/save&id='.$pro->id; ?>
      <?php else: ?>
        <h3>Crear nuevos productos</h3>
        <?php $url_action = base_url.'productsave.php'; ?>
      <?php endif; ?>
      <hr width="70%"></br>
    </div>
    <div class="Contvcc Frm2 Brd15" style="width: 440px;">
      <div class="Contvtl" id="AddProd">
        <form action="<?=$url_action?>" method="Post" enctype="multipart/form-data">
          <br><br>
          <div class="Conthcl">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" 
              value="<?=isset($pro) ? $pro['nombre'] : ''; ?>" required />
          </div>
          <div class="Conthcl">
            <label for="descripcion">Descripcion:</label>
            <textarea name="descripcion" required><?=isset($pro) ? $pro['descripcion'] : ''; ?></textarea>
          </div>
          <div class="Conthcl">
            <label for="precio">Precio:</label>
            <input type="number" name="precio"
              value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>" required />
          </div>
          <div class="Conthcl">
            <label for="stock">Stock:</label>
            <input type="number" name="stock"
              value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>" required />
          </div>
          <div class="Conthcl">
            <label for="marca">Marca:</label>
            <select name="marca" required>
              <?php while($marca = $marcas->fetch_object()): ?>
                <option value="<?=$marca->id_marca?>" <?=isset($pro) && is_object($pro) && $marca->id == $pro->marca_id ? 'selected' : ''; ?>>
                  <?=$marca->nombre_marca?>
                </option>
              <?php endwhile; ?>
            </select>
          </div>
          <div class="Conthcl">
            <label for="imagen">Imagen:</label>
            <?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
              <img class="Img40x40" src="<?=base_url?>/assets/products/<?=$pro->imagen?>" alt="Foto del producto" />
            <?php endif; ?>
            <input type="file" name="imagen" required/>
          </div>
          <div class="Conthcs" style="width: 100%; margin-top: 20px;">
            <input type="submit" class="Bt4b" style="width: 100px;" value="Guardar" />
            <input type="button" class="Bt4r" style="width: 100px;" value="Cancelar" 
              onclick="location.href='<?=base_url?>views/productos.php'"/>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>