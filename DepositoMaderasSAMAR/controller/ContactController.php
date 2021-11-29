<?php

class ContactController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    public function showContactView(){
        $this->view->show("contactView.php", null);  
    }//showContactView
    
    public function sendContactMail(){

    }//sendContactMail
   
    
}//ContactController
