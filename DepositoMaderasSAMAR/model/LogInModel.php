<?php

class LogInModel {

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

    //Función ejemplo para insertar cosas a la base de datos
    public function getUser($userName){
       
        $consulta = $this->db->prepare('SELECT * FROM `UCRgrupo2`.`g4_Users` WHERE userName = "'.$userName.'";');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin nombreFuncion
    
    // Funcion para obtener un cliente de la base de datos
    public function getClient($userName){
        $consulta = $this->db->prepare('SELECT id FROM `UCRgrupo2`.`g4_Client` WHERE user = "'.$userName.'";');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin getClient

    //Función para insertar usuarios a la base de datos
    public function createUser($type,$name,$lastName,$fullName,$telephone,$address,$age,$email,$user,$password,$typeWood){
       
        switch($type) {
        case 'employee':
            $consulta = $this->db->prepare('INSERT INTO `UCRgrupo2`.`g4_Employee`(`fullName`,`telephone`,`address`,`age`) VALUES ("'.$fullName.'", "'.$telephone.'", "'.$address.'","'.$age.'"); INSERT INTO `UCRgrupo2`.`g4_Users` (`userName`, `password`, `type`) VALUES ("'.$user.'", "'.$password.'", "Empleado");');
            $consulta->execute();
            $consulta->CloseCursor();
        case 'client':
            $consulta = $this->db->prepare('INSERT INTO `UCRgrupo2`.`g4_Client` (`name`,`lastName`,`telephone`,`address`,`email`,`user`,`password`)VALUES("'.$name.'","'.$lastName.'","'.$telephone.'","'.$address.'","'.$email.'","'.$user.'","'.$password.'"); INSERT INTO `UCRgrupo2`.`g4_Users` (`userName`, `password`, `type`) VALUES ("'.$user.'", "'.$password.'", "Cliente");');
            $consulta->execute();
            $consulta->CloseCursor();
        case 'suplier':
            $consulta = $this->db->prepare('INSERT INTO `UCRgrupo2`.`g4_Suplier`(`name`,`lastName`,`telephone`,`sellingPermitPicture`,`typeWood`) VALUES ("'.$name.'", "'.$lastName.'", "'.$telephone.'",NULL,"'.$typeWood.'"); INSERT INTO `UCRgrupo2`.`g4_Users` (`userName`, `password`, `type`) VALUES ("'.$user.'", "'.$password.'", "Proveedor");');
            $consulta->execute();
            $consulta->CloseCursor();
        default:
            
        }             
    } //Fin createUser
               
}//Fin Clase LogInModel

