<?php
  require_once 'config/conexion.php';

  class Producto{
    private $id;
    private $nombre;
    private $descripcion;
    private $costo;
    private $alquiler_hora;
    private $alquiler_dia;
    private $id_marca;
    private $id_tipo;
    private $db;

    public function __construct() {
      $this->db = Connection::connect();
    }
    // Getters
    function getId() {
      return $this->id;
    }
    function getNombre() {
      return $this->nombre;
    }
    function getDescripcion() {
      return $this->descripcion;
    }
    function getCosto() {
      return $this->costo;
    }
    function getAlquilerHora() {
      return $this->alquiler_hora;
    }
    function getAlquilerDia() {
      return $this->alquiler_dia;
    }
    function getIdMarca() {
      return $this->id_marca;
    }
    function getIdTipo() {
      return $this->id_tipo;
    }
    // Setters
    function setId($id) {
      $this->id = $id;
    }
    function setNombre($nombre) {
      $this->nombre = $this->db->real_escape_string($nombre);
    }
    function setDescripcion($descripcion) {
      $this->descripcion = $this->db->real_escape_string($descripcion);
    }
    function setCosto($costo) {
      $this->costo = $this->db->real_escape_string($costo);
    }
    function setAlquilerHora($alquiler_hora) {
      $this->alquiler_hora = $this->db->real_escape_string($alquiler_hora);
    }
    function setAlquilerDia($alquiler_dia) {
      $this->alquiler_dia = $this->db->real_escape_string($alquiler_dia);
    }
    function setIdMarca($id_marca) {
      $this->id_marca = $id_marca;
    }
    function setIdTipo($id_tipo) {
      $this->id_tipo = $id_tipo;
    }

    public function getRandom($limit=4){
      $result = false;
      $sql = "SELECT * FROM productos, imagenes WHERE id_producto = id_producto_imagen
      GROUP BY id_producto ORDER BY RAND() LIMIT $limit";
      $datos = $this->db->query($sql);
      if($datos && $datos->num_rows > 0){
        $result = $datos;
      }
      return $result;
    }

  }
?>