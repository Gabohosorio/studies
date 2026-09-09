<?php
  class Usuario {
    private $id;
    private $nombre;
    private $email;

    public function getId() {
      return $this->id;
    }

    public function getNombre() {
      return $this->nombre;
    }

    public function getEmail() {
      return $this->email;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }

    public function setEmail($email) {
      $this->email = $email;
    }

    public function getAll(){
      // $db = Database::connect();
      // $sql = "SELECT * FROM usuarios";
      // $result = $db->query($sql);
      // return $result;
      return "Listado de todos los usuarios";

    }
  }
?>