<?php
  require_once 'config/conexion.php';

  class Usuario{
    private $id;
    private $nombre;
    private $email;
    private $password;
    private $telefono;
    private $direccion;
    private $rol;
    private $genero;
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

    function getEmail() {
      return $this->email;
    }

    function getPassword() {
      return password_hash($this->password, PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function getTelefono() {
      return $this->telefono;
    }

    function getDireccion() {
      return $this->direccion;
    }

    function getRol() {
      return $this->rol;
    }

    function getGenero() {
      return $this->genero;
    }

    // Setters
    function setId($id) {
      $this->id = $id;
    }

    function setNombre($nombre) {
      $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setEmail($email) {
      $this->email = $this->db->real_escape_string($email);
    }

    function setPassword($password) {
      $this->password = $password; // Hashing is done in the getter
    }

    function setTelefono($telefono) {
      $this->telefono = $this->db->real_escape_string($telefono);
    }    
    
    function setDireccion($direccion) {
      $this->direccion = $this->db->real_escape_string($direccion);
    }    

    function setRol($rol) {
      $this->rol = $rol;
    }

    function setGenero($genero) {
      $this->genero = $genero;
    }

    // Methods
    public function save(){
      $result = false;
      try {
        $sql = "INSERT INTO usuarios VALUES (
          '{$this->getId()}', 
          '{$this->getNombre()}',
          '{$this->getEmail()}',
          '{$this->getPassword()}',
          '{$this->getTelefono()}',
          '{$this->getDireccion()}',
          2,
          '{$this->getGenero()}'
        )";
        $save = $this->db->query($sql);
        if($save){
          $result = true;
        }
        return $result;
      } catch (Exception $e) {
        return $result;
      }
    }

    public function login(){
      $result = false;
      $id = $this->id;
      $password = $this->password;

      // Check if user exists
      $sql = "SELECT * FROM usuarios WHERE id_usuario = '$id'";
      $login = $this->db->query($sql);

      if($login && $login->num_rows == 1){
        $usuario = $login->fetch_object();

        // Verify password
        $verify = password_verify($password, $usuario->clave_usuario);
        if($verify){
          $result = $usuario;
        }
      }
      return $result;
    }
  }
?>