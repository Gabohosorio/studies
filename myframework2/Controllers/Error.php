<?php
  class Errors extends Controllers{ //extends para poder heredar las autocargas
    public function __construct(){
      parent::__construct();
    }

    public function notFound(){
      $this->views->getView($this, "error"); //El constructor hace la instancia de Views
    }
  }
  $notFound = new Errors();
  $notFound->notFound();
?>