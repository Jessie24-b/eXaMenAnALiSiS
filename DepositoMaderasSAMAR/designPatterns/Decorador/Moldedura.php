<?php

require_once("ProductDecorator.php");

class Moldedura extends ProductDecorator{




    public function insertsProductsWithItem(){

        $item = ""; 
        print_r("valor de dato=".$this->data['Moldedura']);
        if (isset($this->data['Moldedura']) && !empty($this->data['Moldedura']) && !is_null($this->data['Moldedura'])) {
            $item = "Moldedura'";
            array_push($this->_items->insertsProductsWithItem(),$item);
            
        }
        print_r("resultado externo");
        print_r($this->_items->insertsProductsWithItem());
        print_r("resultado externo");
        return $this->_items->insertsProductsWithItem() ;
       
    }
}