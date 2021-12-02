<?php

require_once("ProductDecorator.php");

class cepillado extends ProductDecorator{




    public function insertsProductsWithItem(){

        $filter = 0;
        if (isset($this->data['Cepillado']) && !empty($this->data['Cepillado']) && !is_null($this->data['Cepillado'])) {
            $filter =$this->data['Cepillado'];
             //Using del modelo
                require 'model/ProductClientModel.php';
                //Instancia del controlador
                $products = new ProductClientModel(); 
                $products->insertProductWithItem($filter,$this->data['idClient'],$this->data['idProduct']);
          
        }
       
        return $this->_filter->insertsProductsWithItem().$filter;
       
    }
}