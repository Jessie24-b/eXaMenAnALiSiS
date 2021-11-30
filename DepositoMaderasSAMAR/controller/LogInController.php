<?php

class LogInController {

    //Constructor
    public function __construct() {
        $this->view = new View();
        
    }//Constructor
    
    public function showLogInView(){
        
        $this->view->show("LogInView.php", null);  
       
    }//showLogInView
    
    public function showMainAdminView(){
        $this->view->show("mainAdminView.php", null);  
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
        $this->view->show("clientsAdminView.php",$data); 
    }//showClientsAdminView
    
    public function showServicesAdminView(){
        $this->view->show("servicesAdminView.php", null);  
    }//showServicesAdminView
    
    public function showProfileAdminView(){
        $this->view->show("profileAdminView.php", null);  
    }//showProfileAdminView

 
    
    public function showCreateNewClientAccountView(){
        
        if($_POST){
            print_r($_POST);
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $telephone = $_POST['telephone'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $user = $_POST['user'];
            $password = $_POST['password'];
            ClientModel::addClient($name,$lastname,$telephone,$address,$email,$user,$password);       
        }
    

        $this->view->show("createNewAccountView.php", null);  
        
    }//showCreateNewClientAccountView
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
