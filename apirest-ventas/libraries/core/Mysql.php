<?php
  class Mysql extends Connection{
    private $conex;
    private $sql;
    private $values;

    public function __construct(){
      $this->conex = new Connection();
      $this->conex = $this->conex->connect();
    }

    public function insert(string $sql, array $values){
      try{
        $this->sql = $sql;
        $this->values = $values;
        $query = $this->conex->prepare($this->sql);
        $execute = $query->execute($this->values);
        $idInsert = $this->conex->lastInsertId();
        $query->closeCursor();
        return $idInsert;
      }catch(Exception $er){
        $result = "Error: ".$er->getMessage();
        return $result;
      }
    }

    public function getAll(string $sql){
      try{
        $this->sql = $sql;
        $query = $this->conex->query($this->sql);
        $datos = $query->fetchall(PDO::FETCH_ASSOC); //Datos como arreglo
        $query->closeCursor();
        return $datos;
      }catch(Exception $er){
        $result = "Error: ".$er->getMessage();
        return $result;
      }
    }

    public function getOne(string $sql, array $values){
      try{
        $this->sql = $sql;
        $this->values = $values;
        $query = $this->conex->prepare($this->sql); 
        $execute = $query->execute($this->values);
        $datos = $query->fetch(PDO::FETCH_ASSOC); //Registro como arreglo
        $query->closeCursor();
        return $datos;
      }catch(Exception $er){
        $result = "Error: ".$er->getMessage();
        return $result;
      }
    }

    public function update(string $sql, array $values){
      try{
        $this->sql = $sql;
        $this->values = $values;
        $query = $this->conex->prepare($this->sql); 
        $execute = $query->execute($this->values);
        $query->closeCursor();
        return $execute;
      }catch(Exception $er){
        $result = "Error: ".$er->getMessage();
        return $result;
      }
    }

    public function delete(string $sql, array $values){
      try{
        $this->sql = $sql;
        $this->values = $values;
        $query = $this->conex->prepare($this->sql); 
        $execute = $query->execute($this->values);
        $query->closeCursor();
        return $execute;
      }catch(Exception $er){
        $result = "Error: ".$er->getMessage();
        return $result;
      }
    }

  }
?>