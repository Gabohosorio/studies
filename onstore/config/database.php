<?php
  class Database{
    public static function conectar(){
      $Db = [
				"server" => "localhost",
				"user" => "temporal",
				"pass" => "Pruebas.2024",
				"datab" => "notasmaster",
			];
			$conex = new mysqli($Db['server'], $Db['user'], $Db['pass'], $Db['datab']);
      $conex->query("SET NAMES 'utf8'");
      return $conex;
    }
  }
?>