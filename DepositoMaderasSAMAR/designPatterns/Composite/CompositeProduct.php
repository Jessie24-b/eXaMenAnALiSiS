<?php

require_once('designPatterns\Composite\AbstracProduct.php');
class CompositeProduct extends AbstracProduct{ 

public  $list = array();


    public function __construct($idProduct,$details,$quantity,$totalAmount)
    {
    parent::__construct($idProduct,$details,$quantity,$totalAmount*$quantity);
    }

    public function getPrice(){
        $price=0;
        foreach($this->list as $product){
           
            $price += $product->getTotalAmount()*$product->getQuantity();
        }                      
        return $price;
    }

    public function addProduct(AbstracProduct $product){
   
        array_push($this->list, $product);
      
        
    }

    public function removeProduct(){
        
    }

}


?>