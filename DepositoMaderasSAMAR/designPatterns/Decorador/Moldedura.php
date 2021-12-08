<?php

require_once("ProductDecorator.php");

class Moldedura extends ProductDecorator{




    public function insertsProductsWithItem(){

        $filter = "";
       
        if (isset($this->data['Moldedura']) && !empty($this->data['Moldedura']) && !is_null($this->data['Moldedura'])) {
            $filter =' Moldedura';
           
           
            $this->getModel()->insertProductWithItem($this->data['Moldedura'],$this->data['idClient'],$this->data['idProduct']);
            
        }
        
        return $this->_filter->insertsProductsWithItem().$filter;
       
    }


    public function getModel(){
       return $this->_filter->getModel();
    }
}