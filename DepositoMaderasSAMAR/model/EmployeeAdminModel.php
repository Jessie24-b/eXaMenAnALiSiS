<?php

class EmployeeAdminModel {

    //Variables de clase
    //Base de datos
    protected $db;

    //Constructor
    public function __construct() {
        //Driver que permite conectar a mySQL
        require 'libs/SPDO.php';
        //Se guarda la instancia de BD en la variable db
        $this->db = SPDO::singleton();
    }//Fin constructor
    
    //Aqui para abajo van todas las funciones de la Base de Datos , ejemplo leer, listar, eliminar , actualizar , etc...

    //Función para eliminar producto de la base de datos
    public function deleteEmployee($id){
        $consulta = $this->db->prepare('DELETE FROM `UCRgrupo2`.`g4_Employee` WHERE id = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin deleteProduct
    
    //Función para agregar empleado de la base de datos
    public function addEmployee($fullName,$telephone,$address,$age){
        $consulta = $this->db->prepare('INSERT INTO `UCRgrupo2`.`g4_Employee`(`fullName`,`telephone`,`address`,`age`) VALUES ("'.$fullName.'", "'.$telephone.'", "'.$address.'","'.$age.'");');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin addEmployee
    
    //Función para actualizar empleado de la base de datos
    public function updateEmployee($id,$fullName,$telephone,$address,$age){
        $consulta = $this->db->prepare('UPDATE `UCRgrupo2`.`g4_Employee` SET `fullName` = "'.$fullName.'", `telephone` = "'.$telephone.'", `address` = "'.$address.'", `age` = "'.$age.'" WHERE `id` = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin updateEmployee
    
    //Función para listar los empleados disponibles en la base de datos
    public function getEmployeesList( ){
        $consulta = $this->db->prepare('SELECT * FROM g4_Employee;');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin getEmployeesList
               
}//Fin Clase EmployeeAdminModel

