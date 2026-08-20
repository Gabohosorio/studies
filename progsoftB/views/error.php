<?php
  $er_reg = $_SESSION['msgerror'] ?? "Upps! ha ocurrido un Error!!";
  unset($_SESSION['msgerror']);
  if(isset($_SESSION['Page'])){
    $page = $_SESSION['Page'];
    unset($_SESSION['Page']);
  } else{
    $page = "/index.php";
  }
?>
<div class="Contptc Frm1">
  <div class="Contvcc FrmEr Smbr2">
    <div class="Contvtc" style="margin-top: 30px;">
      <img class="ImgLog2" src="<?=base_url?>/assets/images/onlineshop48.png">
      <h6><?=$er_reg?></h6>
    </div>
    <div class="Conthcc" style="margin-top: 20px;">
      <img class="ImgMdl" src="<?=base_url?>/assets/images/warning.png">
    </div>
    <div>
      <input type="button" class="Btc" value="Regresar"
        onclick="location.href='<?=base_url . $page ?>'"/>
    </div><br>
  </div>

</div>