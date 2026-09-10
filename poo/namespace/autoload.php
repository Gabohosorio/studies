<?php
  function autoload($class){
    $url = str_replace("\\", "/", $class);
    $url .= ".php";
    // echo $class . "<br>";
    // echo $url . "<br>";
    require_once($url);
  }
  spl_autoload_register('autoload');
?>