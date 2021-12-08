<?php
require 'Mediator\NetWorkMediator.php';
class Empleados extends NetWorkMediator{
 
     public $name;
     public $telephon;
     public $adress;
     public $age;
    
    public function __construct($name, $telephon, $adress, $notify) {
     $this->telephon=$telephon;
     $this->name=$name;
     $this->adress=$adress;
     $this->notify=$notify;

    }//Fin constructor

}

?>