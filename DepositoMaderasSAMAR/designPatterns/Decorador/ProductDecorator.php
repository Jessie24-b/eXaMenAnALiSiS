<?php

require_once("iProducto.php");

abstract class ProductDecorator implements iProducto
{
      //Using del modelo
     
      //Instancia del controlador
    
    public $data = "";
    protected $_filter = null;
    public function __construct(iProducto $filter)
    {
        $this->data = $filter->data;
        $this->_filter = $filter;
    }

}