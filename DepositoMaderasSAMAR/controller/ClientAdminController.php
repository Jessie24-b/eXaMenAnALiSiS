<?php

class ClientAdminController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    //Método encargado de mostrar la view para registrar cliente
    public function showAddClientView(){        
        $this->view->show("clientAddView.php", null);  
    }//showAddClientView
    
    //Método encargado de mostrar la view para actualizar o modificar cliente
    public function showUpdateClientView(){ 
        //Using del modelo
        require 'model/ClientAdminModel.php';
        //Instancia del controlador
        $client = new ClientAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['clientsList'] = $client->getClientsList();
        
        $this->view->show("clientUpdateView.php", $data);  
    }//showUpdateClientView
    
    //Método encargado de mostrar la view para ver el client
    public function showClientView(){ 
        
        //Using del modelo
        require 'model/ClientAdminModel.php';
        //Instancia del controlador
        $client = new ClientAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['clientsList'] = $client->getClientsList();       
        
        $this->view->show("clientListView.php", $data);  
    }//showClientView
    
    public function showDeleteClientView(){   
        
        //Using del modelo
        require 'model/ClientAdminModel.php';
        //Instancia del controlador
        $client = new ClientAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['clientsList'] = $client->getClientsList();
        
        $this->view->show("clientDeleteView.php", $data);  
    }//showDeleteClientView
    
    public function deleteClient(){   
        
        //Using del modelo
        require 'model/ClientAdminModel.php';
        //Instancia del controlador
        $client = new ClientAdminModel();   
        
        //Se capturan las variables
        $id = $_POST["id"];
        
        $client->deleteClient($id);
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['clientsList'] = $client->getClientsList();
        
        $this->view->show("clientDeleteView.php", $data);  
    }//DeleteClient
    
    public function addClient(){   
        
        //Using del modelo
        require 'model/ClientAdminModel.php';
        //Instancia del controlador
        $client = new ClientAdminModel();   
        
        //Se capturan las variables
        $name = $_POST["name"];
        $lastName = $_POST["lastName"];
        $telephone = $_POST["telephone"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $user = $_POST["user"];
        $password = $_POST["password"];
        
        $client->addClient($name,$lastName,$telephone,$address,$email,$user,$password);
        
        $this->view->show("clientAddView.php", null);  
    }//addCleint
    
    public function updateClient(){   
        
        //Using del modelo
        require 'model/ClientAdminModel.php';
        //Instancia del controlador
        $client = new ClientAdminModel();   
        
        //Se capturan las variables
        $id = $_POST["id"];        
        $name = $_POST["name"];
        $lastName = $_POST["lastName"];
        $telephone = $_POST["telephone"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $user = $_POST["user"];
        $password = $_POST["password"];
        
        $client->updateClient($id,$name,$lastName,$telephone,$address,$email,$user,$password);
               
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['clientsList'] = $client->getClientsList();
        
        $this->view->show("clientUpdateView.php", $data);  
    }//updateClient

    public function addClientMediator(){   
         require 'designPatterns\Mediator\Mediator.php';
         $mediator = new Mediator();
         $mediator->Send();
    }//addEmployee

     //Método encargado de mostrar la view para ver el client
     public function showClientMediatorView(){ 
         //$mediator->Obtain();
         //Using del modelo
         require 'model/ClientAdminModel.php';
         //Instancia del controlador
         $client = new ClientAdminModel();   
         
         //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
         $data['mediatorList'] = $client->getClientsListMediator();       
         
         $this->view->show("employeMediatorView.php", $data);  
    }//showClientView
    
}//CleintAdminController
