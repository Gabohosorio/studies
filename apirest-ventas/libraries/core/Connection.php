<?php
  class Connection{
    //Forma 1
    // private $host = 'localhost';
    // private $port = '3309';
    // private $user = 'root';
    // private $pass = '';
    // private $name = 'sistemacreditos';
    private $conn;

    public function __construct(){
      if(CONNECTION){
        try{
          //Forma 1
          // $connString = "mysql:host=".$this->host.";port=".$this->port.";dbname=".$this->name.";charset=utf8mb4";
          // $this->conn = new PDO($connString,$this->user,$this->pass);
          // $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          //Forma 2
          $connString = "mysql:host=".dbHost.";port=".dbPort.";dbname=".dbName.";charset=".dbChar;
          $this->conn = new PDO($connString,dbUser,dbPass);
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $er){
          echo "Error: " . $er->getMessage();
          die();
        }
      }
    }

    public function connect(){
      date_default_timezone_set('America/Bogota');
      return $this->conn;
    }
  }
?>
