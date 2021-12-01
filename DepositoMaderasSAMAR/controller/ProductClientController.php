<?php

class ProductClientController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    public function showPr(){        
        $this->view->show("productoClientView.php", null);  
    }//showClientView

    //Método encargado de mostrar la view para ver los productos
    public function showProductView(){ 
        
        //Using del modelo
        require 'model/ProductClientModel.php';
        //Instancia del controlador
        $products = new ProductClientModel();   
        print_r("Entrada al metodo");
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['productsList'] = $products->getProductsList();
        
        $this->view->show("productoClientView.php", $data);  
    }//showInventoryView

     //Método encargado de mostrar la view para ver los productos
     public function showClientMAinView(){ 
        
        
        $this->view->show("ClientViewMain.php", NULL);  
    }//showInventoryView

}//ClientController



