<?php

require_once("iProducto.php");
require 'model/ShoppingCartModel.php';
class SoldProductsWithItem implements iProducto{

    public $data = [];
    public $productClient=null;
    public function __construct($data)
    {
        $this->data = $data;
        $this->_sql = " ";
        $this->productClient = new ShoppingCartModel();
     
        $this->productClient->insertProducSold($data['idClient'],$data['idProduct'],$data['details'],$data['quantity']
        ,0,$data['quantity']*$data["price"]);
    }

    

    public function insertsProductsWithItem(){

        return $this->_sql;
       
    }

    public function getModel(){

        return $this->productClient;
       
    }
}

?>