<?php
  require_once("ClassMueble.php");

  final class Mesa extends Mueble {
    private $strForma;
    protected $strTamanio;

    public function __construct(string $descripcion, float $precio, string $color, string $material, string $tamanio) {
      parent::__construct($descripcion, $precio, $color, $material);
      $this->strTamanio = $tamanio;
    }

    public function setForma(string $forma) {
      $this->strForma = $forma;
    }

    public function getInfoProducto() {
      $arrProducto = [
        "descripcion" => $this->strDescripcion,
        "precio" => $this->fltPrecio,
        "stockMinimo" => $this->intStockMinimo,
        "status" => $this->strStatus,
        "color" => $this->strColor,
        "material" => $this->strMaterial,
        "tamanio" => $this->strTamanio,
        "forma" => $this->strForma
      ];
      return $arrProducto;
    }

  }//End class mesa
?>