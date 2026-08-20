<?php
  require_once 'config/conexion.php';

  class Usuario{
    private $db;

    public function __construct(){
      $this->db = Connection::connect();
    }

    public function registrar(){
      $result = false;
      if(isset($_POST)){
        $id = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $clave = $_POST['clave'];
        try{
          $sql = "Insert Into usuarios Value('{$id}', '{$nombre}', '{$email}', ";
          $sql .= " '{$direccion}', '{$telefono}', '{$clave}', 3)";
          $save = $this->db->query($sql);
          if($save){
            $result = true;
          }
          return $result;
        }catch(Exception $er){
          return $er->getMessage();
        }
      }else{
        return $result;
      }
    }

    public function login(){
      $result = false;
      if(isset($_POST)){
        $id = $_POST['cedula'];
        $clave = $_POST['clave'];
        //SELECT id_usuario, nombre_usuario, clave_usuario, id_rol, nombre_rol FROM usuarios, roles
        //WHERE id_rol_usuario = id_rol AND id_usuario = '762'
        try{
          $sql = "SELECT id_usuario, nombre_usuario, clave_usuario, id_rol, nombre_rol ";
          $sql .= "FROM usuarios, roles WHERE id_rol_usuario = id_rol AND ";
          $sql .= "id_usuario = '{$id}'";
          $save = $this->db->query($sql);
          if($save && $save->num_rows == 1){
            $datos = $save->fetch_object();
            if($datos->clave_usuario == $clave){
              $result = $datos;
              $_SESSION['user'] = $datos->nombre_usuario;
              $_SESSION['rol'] = $datos->id_rol;
            }
          }
        }catch(Exception $er){
          return $er->getMessage();
        }
      }
      return $result;
    }
  }
?>