<?php
  require_once("ClassProducto.php");

  class Mueble extends Producto {
    public $strColor;
    public $strMaterial;
    public $strStatus = "Agotado"; //Redefinición de la propiedad heredada

    public function __construct(string $descripcion, float $precio, string $color, string $material) {
      parent::__construct($descripcion, $precio);
      $this->strColor = $color;
      $this->strMaterial = $material;
    }

    public function getInfoProducto() {
      $arrProducto = [
        "descripcion" => $this->strDescripcion, //Acceso a la propiedad heredada
        "precio" => $this->fltPrecio,
        "stockMinimo" => $this->intStockMinimo, //Acceso a la propiedad heredada
        "status" => $this->strStatus,
        "color" => $this->strColor,
        "material" => $this->strMaterial
      ];
      return $arrProducto;
    }
  }
?>