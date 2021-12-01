<?php

session_start();

class LogInController {

    //Constructor
    public function __construct() {
        $this->view = new View();
        
    }//Constructor
    
    public function showLogInView(){
        
        $this->view->show("LogInView.php", null);  
       
    }//showLogInView
    
    public function showMainAdminView(){
        $userName = $_POST["username"];
        $password = $_POST["password"];
        require 'model/LogInModel.php';

        $logIn = new LogInModel(); 

        $user = $logIn->getUser($userName);
        print_r($user);
          if(sizeof($user) >= 0){
            
            if($user[0]["type"] == "Cliente"){
                $_SESSION["inSession"] = $user[0]["userName"];
                $this->view->show("clientView.php", null); 
            }else {
                $_SESSION["inSession"] = $user[0]["userName"];
                 $this->view->show("mainAdminView.php", null); 
            }
        }

         
    }//showMainAdminView
    
    public function showInventoryAdminView(){
        $this->view->show("inventoryAdminView.php", null);  
    }//showInventoryAdminView
    
    public function showEmployeeAdminView(){
        $this->view->show("employeeAdminView.php", null);  
    }//showEmployeeAdminView
    
    public function showSupliersAdminView(){
        $this->view->show("supliersAdminView.php", null);  
    }//showSupliersAdminView
    
    public function showClientsAdminView(){
       

        $this->view->show("clientsAdminView.php",null); 
    }//showClientsAdminView
    
    public function showServicesAdminView(){
        $this->view->show("servicesAdminView.php", null);  
    }//showServicesAdminView
    
    public function showProfileAdminView(){
        $this->view->show("profileAdminView.php", null);  
    }//showProfileAdminView

 
    //showCreateNewClientAccountView
    public function showCreateNewClientAccountView(){
        
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
        
        $this->view->show("createNewAccountView.php", null);  
        
    }
    public function updateClient()
    {
        $this->view->show("Actualizar.php", null);  
    }
    public function modificar()
    {
        $this->view->show("Update.php", null);  
    }
    public function deleteClient()
    {
        
        $this->view->show("Borrar.php", null);  
    }
    
       
}//LogInController
