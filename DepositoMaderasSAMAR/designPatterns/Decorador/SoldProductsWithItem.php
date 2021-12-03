<?php

require_once("iProducto.php");
require 'model/ShoppingCartModel.php';
class SoldProductsWithItem implements iProducto{

    public $data = [];
    public $productClient=null;
    public function __construct($data)
    {
        $this->data = $data;
        $this->_sql = "";
        $this->productClient = new ShoppingCartModel();
     
    }

    

    public function insertsProductsWithItem(){

        return $this->_sql;
       
    }

    public function getModel(){

        return $this->productClient;
       
    }
}

?>