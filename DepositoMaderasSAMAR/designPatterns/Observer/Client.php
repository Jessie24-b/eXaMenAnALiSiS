<?php

class Client{
 
     public $userName;
     public $name;
     public $lastName;
     public $notify;
    
    public function __construct($userName, $name, $lastName, $notify) {
     $this->userName=$userName;
     $this->name=$name;
     $this->lastName=$lastName;
     $this->notify=$notify;

    }//Fin constructor

}

?>