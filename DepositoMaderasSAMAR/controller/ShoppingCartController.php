<?php

class ShoppingCartController{
 //Constructor
 public function __construct() {
    $this->view = new View();
}//Constructor


public function showShoppingCartView(){  
    
     //Using del modelo
     require 'model/ShoppingCartModel.php';
     //Instancia del controlador
     $shoppingCart = new ShoppingCartModel();  
     
     
     //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
     $data['productList'] = $shoppingCart->getProductList();
     

    $this->view->show("shoppingCartView.php", $data);  
}//showAddEmployeeView

}