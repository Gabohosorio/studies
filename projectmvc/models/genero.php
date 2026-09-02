<?php
  require_once 'config/conexion.php';

  class Genero{
    private $id;
    private $nombre;
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

    // Setters
    function setId($id) {
      $this->id = $id;
    }

    function setNombre($nombre) {
      $this->nombre = $this->db->real_escape_string($nombre);
    }
    
    // CRUD Methods
    public function getAll() {
      $result = false;
      $sql = "SELECT * FROM generos ORDER BY id_genero ASC";
      $datos = $this->db->query($sql);
      if($datos && $datos->num_rows > 0) {
        $result = $datos;
      }
      return $result;
    }
  }