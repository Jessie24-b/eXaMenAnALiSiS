<?php
session_start();
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


public function showDetailsProduct(){
    $idProduct = $_GET['codigo'];
    $idShoppingCart = $_SESSION["inSession"]["id"];

    //Using del modelo
    require 'model/ShoppingCartModel.php';
    require 'designPatterns\Composite\CompositeProduct.php';
    require 'designPatterns\Composite\SimpleProduct.php';
    //Instancia del controlador
    $shoppingCart = new ShoppingCartModel();

   
    $data = $shoppingCart->getSoldProduct($idProduct,$idShoppingCart);
    $data2 = $shoppingCart->getProductWithItem($idProduct,$idShoppingCart);
    $data3['productList'] = $shoppingCart->getProductList();
   
    
    $productComposite = new CompositeProduct($data[0]["idProduct"],$data[0]["details"],
    $data[0]["quantity"],$data[0]["totalAmount"]);

     
    foreach($data2 as $services){
      
        $productComposite->addProduct(new simpleProduct($services[3],$data[0]["details"],
         $data[0]["quantity"],0,$services[1],$services[0]));
    }
    $productComposite->setTotalAmount($productComposite->getTotalAmount()+$productComposite->getPrice());
    
    /*
    print_r($productComposite->getIdProduct());
    echo nl2br("\n");
    print_r($productComposite->getDetails());
    echo nl2br("\n");
    print_r($productComposite->getQuantity());
    echo nl2br("\n");
    print_r($productComposite->getTotalAmount());
*/

    
    $_SESSION["inSession"]['activarModal'] = "Si";
   
    
    $this->view->show("shoppingCartView.php", $data3);  
}

}