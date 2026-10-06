<?php
  class Connection{
    //Forma 1
    // private $host = 'localhost';
    // private $user = 'root';
    // private $pass = '';
    // private $name = 'prestamvc';
    private $conn;

    public function __construct(){
      if(CONNECTION){
        try{
          //Forma 1
          //$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
          //Forma 2
          $this->conn = new mysqli(dbHost, dbUser, dbPass, dbName);
        }catch(Exception $er){
          $this->conn = "Error en la conexión";
          echo "Error: " . $er->getMessage();
        }
      }
    }

    public function connect(){
      header('Content-Type: text/html; charset='.dbChar);
      date_default_timezone_set('America/Bogota');
      return $this->conn;
    }
  }
?>