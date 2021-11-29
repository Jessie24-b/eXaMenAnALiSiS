<?php

class AboutUsController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    public function showAboutUsView(){        
        $this->view->show("aboutUsView.php", null);  
    }//showAboutUsView
      
}//AboutUsController
