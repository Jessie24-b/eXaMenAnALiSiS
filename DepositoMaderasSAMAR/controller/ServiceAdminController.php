<?php

class ServiceAdminController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    //Método encargado de mostrar la view para registrar servicios
    public function showAddServiceView(){        
        $this->view->show("serviceAddView.php", null);  
    }//showAddServiceView
    
    //Método encargado de mostrar la view para actualizar o modificar servicio
    public function showUpdateServiceView(){ 
        //Using del modelo
        require 'model/ServiceAdminModel.php';
        //Instancia del controlador
        $service = new ServiceAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['servicesList'] = $service->getServicesList();
        
        $this->view->show("serviceUpdateView.php", $data);  
    }//showUpdateServiceView
    
    //Método encargado de mostrar la view para ver el service
    public function showServiceView(){ 
        
        //Using del modelo
        require 'model/ServiceAdminModel.php';
        //Instancia del controlador
        $service = new ServiceAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['servicesList'] = $service->getServicesList();       
        
        $this->view->show("serviceView.php", $data);  
    }//showServiceView
    
    public function showDeleteServiceView(){   
        
        //Using del modelo
        require 'model/ServiceAdminModel.php';
        //Instancia del controlador
        $service = new ServiceAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['servicesList'] = $service->getServicesList();
        
        $this->view->show("serviceDeleteView.php", $data);  
    }//showDeleteServiceView
    
    public function deleteService(){   
        
        //Using del modelo
        require 'model/ServiceAdminModel.php';
        //Instancia del controlador
        $service = new ServiceAdminModel();   
        
        //Se capturan las variables
        $id = $_POST["id"];
        
        $service->deleteService($id);
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['servicesList'] = $service->getServicesList();
        
        $this->view->show("serviceDeleteView.php", $data);  
    }//DeleteService
    
    public function addService(){   
        
        //Using del modelo
        require 'model/ServiceAdminModel.php';
        //Instancia del controlador
        $service = new ServiceAdminModel();   
        
        //Se capturan las variables
        $descrip = $_POST["descrip"];
        $price = $_POST["price"];
        
        $service->addService($descrip,$price);
        
        $this->view->show("serviceAddView.php", null);  
    }//addService
    
    public function updateService(){   
        
        //Using del modelo
        require 'model/ServiceAdminModel.php';
        //Instancia del controlador
        $service = new ServiceAdminModel();   
        
        //Se capturan las variables
        $id = $_POST["id"];        
        $descrip = $_POST["descrip"];
        $price = $_POST["price"];
        
        $service->updateService($id,$descrip,$price);
               
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['servicesList'] = $service->getServicesList();
        
        $this->view->show("serviceUpdateView.php", $data);  
    }//updateService
    
}//ServiceAdminController
