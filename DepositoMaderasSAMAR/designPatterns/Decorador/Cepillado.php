<?php

require_once("ProductDecorator.php");

class cepillado extends ProductDecorator{




    public function insertsProductsWithItem(){
//Using del modelo
    require 'model/ProductClientModel.php';

        $filter = "";
        if (isset($this->data['Cepillado']) && !empty($this->data['Cepillado']) && !is_null($this->data['Cepillado'])) {
            $filter ='Cepillado';
             print_r("exploto");
                 
                $this->getModel()->insertProductWithItem($this->data['Cepillado'],$this->data['idClient'],$this->data['idProduct']);
          
        }
       
        return $this->_filter->insertsProductsWithItem().$filter;
       
    }

    public function getModel(){
        return $this->_filter->getModel();
     }
}