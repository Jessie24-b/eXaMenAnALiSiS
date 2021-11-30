<?php

class EmployeeAdminController {

    //Constructor
    public function __construct() {
        $this->view = new View();
    }//Constructor
    
    //Método encargado de mostrar la view para registrar empleados
    public function showAddEmployeeView(){        
        $this->view->show("employeeAddView.php", null);  
    }//showAddEmployeeView
    
    //Método encargado de mostrar la view para actualizar o modificar empleado
    public function showUpdateEmployeeView(){ 
        //Using del modelo
        require 'model/EmployeeAdminModel.php';
        //Instancia del controlador
        $employee = new EmployeeAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['employeesList'] = $employee->getEmployeesList();
        
        $this->view->show("employeeUpdateView.php", $data);  
    }//showUpdateEmployeeView
    
    //Método encargado de mostrar la view para ver el empleado
    public function showEmployeeView(){ 
        
        //Using del modelo
        require 'model/EmployeeAdminModel.php';
        //Instancia del controlador
        $employee = new EmployeeAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['employeesList'] = $employee->getEmployeesList();
        
        $this->view->show("employeeView.php", $data);  
    }//showEmployeeView
    
    public function showDeleteEmployeeView(){   
        
        //Using del modelo
        require 'model/EmployeeAdminModel.php';
        //Instancia del controlador
        $employee = new EmployeeAdminModel();   
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['employeesList'] = $employee->getEmployeesList();
        
        $this->view->show("employeeDeleteView.php", $data);  
    }//showDeleteEmployeeView
    
    public function deleteEmployee(){   
        
        //Using del modelo
        require 'model/EmployeeAdminModel.php';
        //Instancia del controlador
        $employee = new EmployeeAdminModel();   
        
        //Se capturan las variables
        $id = $_POST["id"];
        
        $employee->deleteEmployee($id);
        
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['employeesList'] = $employee->getEmployeesList();
        
        $this->view->show("employeeDeleteView.php", $data);  
    }//DeleteEmployee
    
    public function addEmployee(){   
        
        //Using del modelo
        require 'model/EmployeeAdminModel.php';
        //Instancia del controlador
        $employee = new EmployeeAdminModel();   
        
        //Se capturan las variables
        $fullName = $_POST["fullName"];
        $telephone = $_POST["telephone"];
        $address = $_POST["address"];
        $age = $_POST["age"];
        
        $employee->addEmployee($fullName,$telephone,$address,$age);
        
        $this->view->show("employeeAddView.php", null);  
    }//addEmployee
    
    public function updateEmployee(){   
        
        //Using del modelo
        require 'model/EmployeeAdminModel.php';
        //Instancia del controlador
        $employee = new EmployeeAdminModel();   
        
        //Se capturan las variables
        $id = $_POST["id"];
        $fullName = $_POST["fullName"];
        $telephone = $_POST["telephone"];
        $address = $_POST["address"];
        $age = $_POST["age"];
        
        $employee->updateEmployee($id,$fullName,$telephone,$address,$age);
               
        //Se pone cualquier nombre en el data debido a que es el identificador para poderlo jalar de otro lado
        $data['employeesList'] = $employee->getEmployeesList();
        
        $this->view->show("employeeUpdateView.php", $data);  
    }//updateEmployee
    
    
    
      
}//InventoryAdminController
