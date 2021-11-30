<?php

class clientController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    public function showClientView(){        
        $this->view->show("ClientViewC.php", null);  
    }//showClientView
      
}//ClientController
