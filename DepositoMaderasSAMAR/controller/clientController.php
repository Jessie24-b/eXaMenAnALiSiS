<?php

class clientController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    public function showClientView(){        
        $this->view->show("ClientView.php", null);  
    }//showClientView
      
}//ClientController
