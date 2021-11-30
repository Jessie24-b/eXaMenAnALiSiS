<?php

class SuplierAdminController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    //Método encargado de mostrar la view para registrar proveedor
    public function showAddSuplierView(){        
        $this->view->show("suplierAddView.php", null);  
    }//showAddSuplierView
    
    //Método encargado de mostrar la view para actualizar o modificar proveedor
    public function showUpdateSuplierView(){ 
        //Using del modelo
        require 'model/SuplierAdminModel.php';
        //Instancia del controlador
        $suplier = new SuplierAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['supliersList'] = $suplier->getSupliersList();
        
        $this->view->show("suplierUpdateView.php", $data);  
    }//showUpdateSuplierView
    
    //Método encargado de mostrar la view para ver el proveedor
    public function showSuplierView(){ 
        
        //Using del modelo
        require 'model/SuplierAdminModel.php';
        //Instancia del controlador
        $suplier = new SuplierAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['supliersList'] = $suplier->getSupliersList();
        
        $this->view->show("suplierView.php", $data);  
    }//showSuplierView
    
    public function showDeleteSuplierView(){   
        
        //Using del modelo
        require 'model/SuplierAdminModel.php';
        //Instancia del controlador
        $suplier = new SuplierAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['supliersList'] = $suplier->getSupliersList();
        
        $this->view->show("suplierDeleteView.php", $data);  
    }//showDeleteSuplierView
    
    public function deleteSuplier(){   
        
        //Using del modelo
        require 'model/SuplierAdminModel.php';
        //Instancia del controlador
        $suplier = new SuplierAdminModel();   
        
        //Se capturan las variables
        $id = $_POST["id"];
        
        $suplier->deleteSuplier($id);
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['supliersList'] = $suplier->getSupliersList();
        
        $this->view->show("suplierDeleteView.php", $data);  
    }//DeleteSuplier
    
    public function addSuplier(){   
        
        //Using del modelo
        require 'model/SuplierAdminModel.php';
        //Instancia del controlador
        $suplier = new SuplierAdminModel();   
        
        //Se capturan las variables
        $name = $_POST["name"];
        $lastName = $_POST["lastName"];
        $telephone = $_POST["telephone"];
        $typeWood = $_POST["typeWood"];
        
        $suplier->addSuplier($name,$lastName,$telephone,$typeWood);
        
        $this->view->show("suplierAddView.php", null);  
    }//addSupplier
    
    public function updateSuplier(){   
        
        //Using del modelo
        require 'model/SuplierAdminModel.php';
        //Instancia del controlador
        $suplier = new SuplierAdminModel();   
        
        //Se capturan las variables
        $id = $_POST["id"];
        $name = $_POST["name"];
        $lastName = $_POST["lastName"];
        $telephone = $_POST["telephone"];
        $typeWood = $_POST["typeWood"];
        
        $suplier->updateSuplier($id,$name,$lastName,$telephone,$typeWood);
               
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['supliersList'] = $suplier->getSupliersList();
        
        $this->view->show("suplierUpdateView.php", $data);  
    }//updateSuplier
    
}//SuplierAdminController
