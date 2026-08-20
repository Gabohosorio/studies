<?php
  require_once __DIR__ . '/../config/conexion.php';

  class Producto{
    private $db;

    public function __construct(){
      $this->db = Connection::connect();
    }

    public function getProductos($limit=4){
      $result = false;
      $sql = "SELECT id_producto, nombre_producto, valor_producto, nombre_imagen
              FROM productos, imagenes WHERE id_producto = id_producto_imagen
              Group By id_producto Order By Rand() limit $limit";
      $datos = $this->db->query($sql);
      if($datos && $datos->num_rows > 0)
        $result = $datos;
      return $result;
    }

    public function getMarcas(){
      $result = false;
      $sql = "SELECT * FROM marcas ORDER BY nombre_marca ASC";
      $datos = $this->db->query($sql);
      if($datos && $datos->num_rows > 0)
        $result = $datos;
      return $result;
    }

    public function saveProduct(){
      $result = false;
      try{
        if(isset($_POST)){
          $_SESSION['Product'] = $_POST;
          $nombre = $_POST['nombre'];
          $descri = $_POST['descripcion'];
          $precio = $_POST['precio'];
          $stock = $_POST['stock'];
          $marca = $_POST['marca'];
          if(isset($_FILES['imagen'])){
            $nombre_imagen = $_FILES['imagen']['name'];
            $tipo_imagen = $_FILES['imagen']['type'];
            $ruta_temporal = $_FILES['imagen']['tmp_name'];
            $ruta_destino = __DIR__ . '/../assets/products/' . $nombre_imagen;
            if(isset($tipo_imagen) && ($tipo_imagen == "image/jpeg" || 
             $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png")){
              move_uploaded_file($ruta_temporal, $ruta_destino);
            }else{
              $_SESSION['msgerror'] = "Archivo no valido, se permiten JPEG, JPG o PNG.";
              return $result;
            }
          }else{
            $_SESSION['msgerror'] = "No se ha cargado un archivo de imagen!!";
            return $result;
          }

          $sql = "Insert Into productos Value(null, '{$nombre}', '{$descri}', {$precio}, {$stock}, {$marca})";
          $save = $this->db->query($sql);
          $sql_img = "Insert Into imagenes Value('{$nombre_imagen}', (Select id_producto From productos Order By id_producto Desc Limit 1))";
          $save_img = $this->db->query($sql_img);
          if($save && $save_img){
            $result = true;
          }
          return $result;
        }
      }catch(Exception $er){
        $_SESSION['msgerror'] = "Error: " . $er->getMessage();
        return $result;
      }
      return $result;
    } 
    
    public function getAll(){
      $result = false;
      $sql = "SELECT id_producto, nombre_producto, valor_producto, nombre_imagen
              FROM productos, imagenes WHERE id_producto = id_producto_imagen
              Group By id_producto Order By nombre_producto ASC";
      $datos = $this->db->query($sql);
      if($datos && $datos->num_rows > 0)
        $result = $datos;
      return $result;
    }

  }
?>