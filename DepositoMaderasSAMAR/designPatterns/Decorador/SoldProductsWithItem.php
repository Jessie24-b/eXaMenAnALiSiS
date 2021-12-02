<?php

require_once("iProducto.php");

class SoldProductsWithItem implements iProducto{

    public $data = [];
    public function __construct($data)
    {
        $this->data = $data;
        $this->_sql = "";

       
    }

    

    public function insertsProductsWithItem(){

        return $this->_sql;
       
    }

}

?>