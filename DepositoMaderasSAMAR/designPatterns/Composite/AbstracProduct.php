<?php

abstract class AbstracProduct  {

    protected $idProduct;
    protected $details;
    protected $quantity;
    protected $totalAmount;

    public function __construct($idProduct,$details,$quantity,$totalAmount)
    {
        $this->idProduct = $idProduct;
        $this->details = $details;
        $this->quantity = $quantity;  
        $this->totalAmount = $totalAmount;
        
    }

  
    public function getIdProduct(){
        return $this->idProduct;
    }
    public function setIdProduct($idProduct){
        $this->idProduct = $idProduct;
    }
  

    public function getDetails(){
        return $this->details;
    }
    public function setDetails($details){
        $this->details = $details;
    }


    public function getQuantity(){
        return $this->quantity;
    }
    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }


    public function getTotalAmount(){
        return $this->totalAmount;
    }
    public function setTotalAmount($totalAmount){
        $this->totalAmount = $totalAmount;
    }


}

?>