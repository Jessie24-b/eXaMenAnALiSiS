<?php

class clientController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    public function showClientView(){        
        $this->view->show("ClientViewMain.php", null);  
    }//showClientView

    //Método encargado de mostrar la view para ver los productos
     public function showProductClientView(){ 

        $this->view->show("productoClientView.php", NULL);  
    }//showInventoryView

      
}//ClientController
