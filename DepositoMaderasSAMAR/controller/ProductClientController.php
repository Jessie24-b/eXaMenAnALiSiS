<?php
session_start();
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
       
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['productsList'] = $products->getProductsList();
        $totalData['filas'] = array(
            $data
        );
        
        $this->view->show("productoClientView.php", $totalData);  
    }//showInventoryView

//Metodo encargado de abrir el modal para seleccionar cantidad y servicios que desea el cliente
    public function addProductInCart(){
        
            require 'model/InventoryAdminModel.php';

            $id = $_GET['codigo'];
            $product = new InventoryAdminModel();
            $data2["products"] = $product->getProduct($id); 
            $data["productsList"] = $product->getProductsList(); 
            $_SESSION["inSession"]['activarModal'] = "Si";
            $totalData['filas'] = array(
                $data,
                $data2
            );
            
            $this->view->show("productoClientView.php",$totalData);  


        
    }

//Metodo que inserta el producto a la base de datos
    public function insertProduct(){
       
        require 'designPatterns\Decorador\SoldProductsWithItem.php';
        require 'designPatterns\Decorador\Cepillado.php';
        require 'designPatterns\Decorador\Tablilla.php';
        require 'designPatterns\Decorador\Moldedura.php';
       

        $productWithItem = new SoldProductsWithItem($_POST);
        $cepillado = new cepillado($productWithItem);
        $tablilla = new Tablilla($cepillado);
        $Moldedura = new Moldedura($tablilla);
       
      
        $result["service"] = preg_split("/[\s,]+/", $Moldedura->insertsProductsWithItem());
        
        
         //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
         $data['productsList'] = $productWithItem->getModel()->getProducts();
         $totalData['filas'] = array(
             $data
         );

         $this->view->show("productoClientView.php", $totalData); 
        
    }//fin de insertProduct

     //Método encargado de mostrar la view para ver los productos
     public function showClientMAinView(){ 
        
        
        $this->view->show("ClientViewMain.php", NULL);  
    }//showInventoryView

}//ClientController



