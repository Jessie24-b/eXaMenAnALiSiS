<?php

class InventoryAdminController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    //Método encargado de mostrar la view para registrar inventario
    public function showAddInventoryView(){        
        $this->view->show("inventoryAddView.php", null);  
    }//showshowAddInventoryView
    
    //Método encargado de mostrar la view para actualizar o modificar inventario
    public function showUpdateInventoryView(){ 
        //Using del modelo
        require 'model/InventoryAdminModel.php';
        //Instancia del controlador
        $products = new InventoryAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['productsList'] = $products->getProductsList();
        
        $this->view->show("inventoryUpdateView.php", $data);  
    }//showUpdateInventoryView
    
    //Método encargado de mostrar la view para ver el inventario
    public function showInventoryView(){ 
        
        //Using del modelo
        require 'model/InventoryAdminModel.php';
        //Instancia del controlador
        $products = new InventoryAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['productsList'] = $products->getProductsList();
        
        $this->view->show("inventoryView.php", $data);  
    }//showInventoryView
    
    public function showDeleteInventoryView(){   
        
        //Using del modelo
        require 'model/InventoryAdminModel.php';
        //Instancia del controlador
        $products = new InventoryAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['productsList'] = $products->getProductsList();
        
        $this->view->show("inventoryDeleteView.php", $data);  
    }//showDeleteInventoryView
    
    public function deleteProduct(){   
        
        //Using del modelo
        require 'model/InventoryAdminModel.php';
        //Instancia del controlador
        $products = new InventoryAdminModel();   
        
        //Se capturan las variables
        $id = $_POST["id"];
        
        $products->deleteProduct($id);
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['productsList'] = $products->getProductsList();
        
        $this->view->show("inventoryDeleteView.php", $data);  
    }//DeleteProduct
    
    public function addProduct(){   
        
        //Using del modelo
        require 'model/InventoryAdminModel.php';
        //Instancia del controlador
        $products = new InventoryAdminModel();   
        
        //Se capturan las variables
        $measure = $_POST["measure"];
        $price = $_POST["price"];
        $details = $_POST["descrip"];
        $stock = $_POST["stock"];
        
        $products->addProduct($measure,$price,$details,$stock);
        
        $this->view->show("inventoryAddView.php", null);  
    }//addProduct
    
    public function updateProduct(){   
        
        //Using del modelo
        require 'model/InventoryAdminModel.php';
        //Instancia del controlador
        $products = new InventoryAdminModel();   
        
        //Se capturan las variables
        $id = $_POST["id"];
        $measure = $_POST["measure"];
        $price = $_POST["price"];
        $details = $_POST["descrip"];
        $stock = $_POST["stock"];
        
        $products->updateProduct($id,$measure,$price,$details,$stock);
               
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['productsList'] = $products->getProductsList();
        
        $this->view->show("inventoryUpdateView.php", $data);  
    }//updateProduct
    
    
    
      
}//InventoryAdminController
