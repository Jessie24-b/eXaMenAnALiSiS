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
    
    //Metodo para crear nuevo usuario del sitio web. OJO: No borrar ni modificar, acá se usa el FACTORY METHOD y el ABSTRACT FACTORY
    public function createNewUser(){
        
        require 'designPatterns/FactoryMethod.php';
        require 'model/LogInModel.php';
        
        include_once "designPatterns/AbstractFactory/Utils/AbstractFactory.php";
        include_once "designPatterns/AbstractFactory/Utils/ExternUsersFactory.php";
        include_once "designPatterns/AbstractFactory/Utils/InternUsersFactory.php";

        include_once "designPatterns/AbstractFactory/Objects/WorkerExtern.php";
        include_once "designPatterns/AbstractFactory/Objects/WorkerIntern.php";
        include_once "designPatterns/AbstractFactory/Objects/Client.php";
        include_once "designPatterns/AbstractFactory/Objects/Employee.php";
        include_once "designPatterns/AbstractFactory/Objects/Suplier.php";
        
        //Se utiliza el abstract factory para crear nombre de usuario y contraseñas aleatorias
        //Función encargada de crear las fábricas de usuarios y contraseñas dependiendo de los parámetros a pasar
        function createFactory(AbstractFactory $factory, string $type, string $userName, string $telephone, string $password, string $auxPassword){

          $user =  $factory->createUser($type, $userName, $telephone, $password, $auxPassword);

          return $user;
        }//Devuelve un usuario con todo y su contraseña
        
        //Instancia de la fábrica según el tipo de login
        if ($_POST["type"] == 'employee'){
            $userName = createFactory(new InternUsersFactory(), 'Employee', $_POST["fullName"], $_POST["telephone"], 'NULL', $_POST["age"]);
        } else if ($_POST["type"] == 'suplier'){
            $userName = createFactory(new InternUsersFactory(), 'Suplier', $_POST["name"].$_POST["lastName"], $_POST["telephone"], 'NULL', $_POST["typeWood"]);         
        }else {
            $userName = createFactory(new ExternUsersFactory(), 'Client', $_POST["user"],$_POST["telephone"], $_POST["password"], 'NULL');
        }
        
        //Se crean con el uso de las fabricas de abstract factory el usuario y contraseña
        $auxUserName = $userName->assignUserName();
        $auxPassword = $userName->assignPassword( );
        
        //Se utiliza el factory Method para crear usuarios
        $user = UserFactoryMethod::create($_POST["type"],$_POST["name"],$_POST["lastName"],$_POST["fullName"]
                ,$_POST["telephone"],$_POST["address"],$_POST["age"],$_POST["email"],$_POST["user"],$_POST["password"],
                $_POST["typeWood"]);
        
        $logIn = new LogInModel(); 
        //Se ingresa los datos a la base de datos
        $logIn->createUser($_POST["type"], $user->name, $user->lastName, $user->fullName, $user->telephone, 
                $user->address, $user->age, $user->email, $auxUserName, $auxPassword, $user->typeWood);
        
        $data['userName'] = $auxUserName;
        $data['password'] = $auxPassword;
        
        $this->view->show("newUserVerifyInfoView.php", $data);  
    } 
       
}//LogInController
