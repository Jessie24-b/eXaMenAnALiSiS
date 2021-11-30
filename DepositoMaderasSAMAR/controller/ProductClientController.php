<?php

class ProductClientController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    public function showPr(){        
        $this->view->show("ProductoClientView.php", null);  
    }//showClientView
      
}//ClientController