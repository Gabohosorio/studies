<?php
  class UsuarioController {

    public function getAll() {
      require_once 'models/usuario.php';
      $usuario = new Usuario();
      $usuarios = $usuario->getAll();
      // Procesar los datos obtenidos y pasarlos a la vista
      require_once 'views/usuarios/ver_todos.php';
    }

    public function create() {
      // Lógica para crear un nuevo usuario
      require_once 'views/usuarios/crear.php';
    }
  }
?>