<?php

require_once("ProductDecorator.php");

class Tablilla extends ProductDecorator{




    public function insertsProductsWithItem(){

        $filter = ""; 
        
        if (isset($this->data['Tablilla']) && !empty($this->data['Tablilla']) && !is_null($this->data['Tablilla'])) {
            $filter =  " AND created = '".$this->data['Tablilla']."'";
            
        }
        return $this->_filter->insertsProductsWithItem() . $filter;
    }
}