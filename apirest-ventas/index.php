<?php
  require_once("config/config.php");
  require_once("helpers/helpers.php");

  $url = !empty($_GET['url']) ? $_GET['url']: "home/home";
  $arrUrl = explode('/', $url);
  $controller = $arrUrl[0];
  $method = $arrUrl[0];
  $params = "";
  if(!empty($arrUrl[1])){
    if($arrUrl[1] != ""){
      $method = $arrUrl[1];
    }
  }
  if(!empty($arrUrl[2]) && $arrUrl[2] != ""){
    for($k=2; $k<count($arrUrl); $k++){
      $params .= $arrUrl[$k].",";
    }
    $params = rtrim($params, ',');
  }

  require_once('libraries/core/Autoload.php');
  require_once('libraries/core/Load.php');

?>