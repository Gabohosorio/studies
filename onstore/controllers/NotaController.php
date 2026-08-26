<?php
  class NotaController{

    public function listar(){
      //Modelo
      require_once 'models/nota.php';
      //Controlador
      $nota = new Nota();
      $notas = $nota->conseguirTodos('notas');
      //Vista
      require_once 'views/nota/listar.php';
    }    
    public function crear(){
      //Modelo
      require_once 'models/nota.php';
      //Controlador
      $nota = new Nota();
      $nota->setId_usuario(1);
      $nota->setTitulo("Nota desde PHP MVC");
      $nota->setDescripcion("Descripción de la Nota desde PHP MVC");
      $guardar = $nota->guardar();
      // echo $nota->db->error;
      // die();
      //Vista
      header('Location: index.php/?controller=Nota&action=listar');
      
    }    
    public function borrar(){
      
    }    

  }
?>