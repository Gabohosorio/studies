<?php
  function autoload($class) {
    $file = $class . '.php';
    if (file_exists($file)) {
      require_once $file;
      echo "Clase '$class' cargada desde el archivo '$file'.<br>";
    } else {
      echo "Error: No se pudo cargar la clase '$class'.";
    }
  }
  spl_autoload_register('autoload');
?>