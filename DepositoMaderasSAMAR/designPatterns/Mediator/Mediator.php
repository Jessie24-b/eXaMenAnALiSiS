<?php

require 'designPatterns\Mediator\IMediator.php';
class Mediator implements IMediator{

    public function __construct() {

    }//Constructor
    
    public function Send()
    {
        //Using del modelo
        require 'model\ClientAdminModel.php';
        //Instancia del controlador
        $client = new ClientAdminModel();   
        
        //Se capturan las variables
        $name = $_POST["clientName"];
        $message = $_POST["details"];
        
        $client->addClientMediatorB($name,$message);
        
        $this->view->show("ClientViewMain.php", null);  
        print_r("Mensaje recibido de:");
    }
    public function Obtain()
    {
      
    }
}

?>