<?php

Class DefaultController {
    
    private $view;

    public function __construct() {     
        $this->view = new View();
    }//Constructor
    
    public function acciondefault(){
           
        session_destroy();
        //llamar modelo para traer datos 
        $this->view->show("indexView.php", null);
        
    }//acciondefault
    
}//Fin Clase
