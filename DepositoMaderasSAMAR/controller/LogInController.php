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
                $this->view->show("clientViewMain.php", null); 
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
     
    //showshowCreateNewUserView
    public function showCreateNewUserView(){
        $this->view->show("createNewAccountView.php", null);  
    }  
    
    public function showCreateNewEmployeeUserView(){
        $this->view->show("createNewEmployeeUserView.php", null);  
    }  
    
    
    public function showCreateNewClientUserView(){
        $this->view->show("createNewClientUserView.php", null);  
    }  
    
    public function showCreateNewSuplierUserView(){
        $this->view->show("createNewSuplierUserView.php", null);  
    }   
    
    //Metodo para crear nuevo usuario del sitio web. OJO: No borrar ni modificar, acá se usa el FACTORY METHOD
    public function createNewUser(){
        
        require 'designPatterns/FactoryMethod.php';
        require 'model/LogInModel.php';
        
        $logIn = new LogInModel(); 
        
        //Se utiliza el factory Method para crear usuarios
        $user = UserFactoryMethod::create($_POST["type"],$_POST["name"],$_POST["lastName"],$_POST["fullName"]
                ,$_POST["telephone"],$_POST["address"],$_POST["age"],$_POST["email"],$_POST["user"],$_POST["password"],
                $_POST["typeWood"]);
        
        $logIn->createUser($user->getType(), $user->name, $user->lastName, $user->fullName, $user->telephone, 
                $user->address, $user->age, $user->email, $user->user, $user->password, $user->typeWood);
        
        $this->view->show("createNewAccountView.php", null);  
    } 
       
}//LogInController
