<?php

require_once('designPatterns\Composite\AbstracProduct.php');

class simpleProduct extends AbstracProduct{
    
    
   
    protected $discount;
    protected $service;


    public function __construct($idProduct,$details,$quantity,$discount,$totalAmount,$service)
    {
        parent::__construct($idProduct,$details,$quantity,$totalAmount);
         
        $this->discount = $discount;
        $this->service = $service;
        
    }


    public function getDiscount(){
        return $this->discount;
    }
    public function setDiscount($discount){
        $this->discount = $discount;
    }

    public function getService(){
        return $this->service;
    }

    public function setService($service){
        $this->service = $service;
    }

}

?>