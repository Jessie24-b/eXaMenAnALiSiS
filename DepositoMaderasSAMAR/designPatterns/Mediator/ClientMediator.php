<?php

require 'Mediator\NetWorkMediator.php';
class ClientMediator extends NetWorkMediator{
 
     public $name;
     public $message;
    
    public function __construct( $name, $message) {
     $this->name=$name;
     $this->message=$message;

    }//Fin constructor

}

?>