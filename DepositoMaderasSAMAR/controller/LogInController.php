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
        $client = $logIn->getClient($userName);
        $_SESSION["inSession"] = array();
        $user = $logIn->getUser($userName);

          if(sizeof($user) >= 0){
            
            if($user[0]["type"] == "Cliente"){
                $_SESSION["inSession"]["id"] = $client[0]["id"];
                $_SESSION["inSession"]["userName"] = $user[0]["userName"];
                $this->view->show("clientViewMain.php", null); 
            }else {
                $_SESSION["inSession"]["userName"]  = $user[0]["userName"];
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

//Método encargado de mostrar la view para ver las notificaciones
public function showObserverAdminView(){ 
    //Using del modelo
    require 'model\InventoryAdminModel.php';
    //Instancia del controlador
    $client = new InventoryAdminModel();   
    
    //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
    $data['clientsList'] = $client->getClientsListObserver();       
    
    $this->view->show("NotificationsView.php", $data);  
}//showObserverAdminView

public function showMediatorClitView(){ 
       
    $this->view->show("MessageView.php", null);
  
}//showObserverAdminView
     
    //showshowCreateNewUserView
    public function showCreateNewUserView(){
        $this->view->show("createNewAccountView.php", null);  
    }  
    
   ////////////////////////BUILDER///////////////////////////////// 
    public function showCreateNewEmployeeUserView(){
        
        include_once 'designPatterns/Builder.php';
        
        //Código para crear con views con Builder
        $pageBuilder = new HTMLPageBuilder();
        $pageDirector = new HTMLPageDirector($pageBuilder);
        $pageDirector->buildPage("2");
        $page = $pageDirector->getPage();
        echo $page->showPage();
        
        //$this->view->show("createNewEmployeeUserView.php", null);  
    }  
    
    
    public function showCreateNewClientUserView(){
        
        include_once 'designPatterns/Builder.php';
        
        //Código para crear con views con Builder
        $pageBuilder = new HTMLPageBuilder();
        $pageDirector = new HTMLPageDirector($pageBuilder);
        $pageDirector->buildPage("1");
        $page = $pageDirector->getPage();
        echo $page->showPage();
        
//        $this->view->show("createNewClientUserView.php", null);  
    }  
    
    public function showCreateNewSuplierUserView(){
        
        include_once 'designPatterns/Builder.php';
        
        //Código para crear con views con Builder
        $pageBuilder = new HTMLPageBuilder();
        $pageDirector = new HTMLPageDirector($pageBuilder);
        $pageDirector->buildPage("3");
        $page = $pageDirector->getPage();
        echo $page->showPage();

        //$this->view->show("createNewSuplierUserView.php", null);  
    }   
    
       ////////////////////////BUILDER///////////////////////////////// 
    
    
    ///////////////////////////////////////Factory Method//////////////////////////////
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
        
        //Se utiliza el factory Method para crear usuarios
        $user = UserFactoryMethod::create($_POST["type"],$_POST["name"],$_POST["lastName"],$_POST["fullName"]
                ,$_POST["telephone"],$_POST["address"],$_POST["age"],$_POST["email"],$_POST["user"],$_POST["password"],
                $_POST["typeWood"]);
        
        $logIn = new LogInModel(); 
        
        //Instancia de la fábrica según el tipo de login
        if ($_POST["type"] == 'employee'){
            
            //Se crea el usuario y contraseña por medio del abstract factory
            $userName = createFactory(new InternUsersFactory(), 'Employee', $_POST["fullName"], $_POST["telephone"], 'NULL', $_POST["age"]);
            
            //Se obtienen la contraseña y nombre de usuario
            $auxUserName = $userName->assignUserName();
            $auxPassword = $userName->assignPassword( );
            
            //Por último se ingresan los datos en la base de datos mediante el uso del objeto creado con el factory method
            $logIn->addEmployee($user->fullName, $user->telephone, $user->address, $user->age, $auxUserName, $auxPassword);
            
        } else if ($_POST["type"] == 'suplier'){
            //Se crea el usuario y contraseña por medio del abstract factory
            $userName = createFactory(new InternUsersFactory(), 'Suplier', $_POST["name"].$_POST["lastName"], $_POST["telephone"], 'NULL', $_POST["typeWood"]);     
            
            //Se obtienen la contraseña y nombre de usuario
            $auxUserName = $userName->assignUserName();
            $auxPassword = $userName->assignPassword( );
            
            //Por último se ingresan los datos en la base de datos mediante el uso del objeto creado con el factory method
            $logIn->addSuplier($user->name, $user->lastName, $user->telephone, $auxUserName, $auxPassword, $user->typeWood);
            
        }else {
            //Se crea el usuario y contraseña por medio del abstract factory
            $userName = createFactory(new ExternUsersFactory(), 'Client', $_POST["user"],$_POST["telephone"], $_POST["password"], 'NULL');
            
            //Se obtienen la contraseña y nombre de usuario
            $auxUserName = $userName->assignUserName();
            $auxPassword = $userName->assignPassword( );
            
            //Por último se ingresan los datos en la base de datos mediante el uso del objeto creado con el factory method
            $logIn->addClient($user->name, $user->lastName, $user->telephone, $user->address, $user->email, $auxUserName, $auxPassword);
        }
        
        //Se envía el nombre de usuario y la contraseña para ser mostradas al usuario en el view
        $data['userName'] = $auxUserName;
        $data['password'] = $auxPassword;
        
        $this->view->show("newUserVerifyInfoView.php", $data);  
    } 
       
}//LogInController
