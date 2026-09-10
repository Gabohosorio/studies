<?php
  //Forma 1
  // function autoload($class) {
  //   require_once ($class . ".php");
  // }
  // spl_autoload_register('autoload');

  //Forma 2
  function autoload($class) {
    require_once ($class . ".php");
    echo $class . ".php <br>";
  }
  spl_autoload_register('autoload');
?>