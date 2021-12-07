<?php

require_once("ProductDecorator.php");

class Tablilla extends ProductDecorator{




    public function insertsProductsWithItem(){

        $filter = ""; 
        
        if (isset($this->data['Tablilla']) && !empty($this->data['Tablilla']) && !is_null($this->data['Tablilla'])) {
            $filter =' Tablilla';
            
            $this->getModel()->insertProductWithItem($this->data['Tablilla'],$this->data['idClient'],$this->data['idProduct']);
            
            
        }
        return $this->_filter->insertsProductsWithItem() . $filter;
    }
    public function getModel(){
        return $this->_filter->getModel();
     }
}