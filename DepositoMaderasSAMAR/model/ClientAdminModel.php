<?php

class ClientAdminModel {

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

    //Función para eliminar cliente de la base de datos
    public function deleteClient($id){
        $consulta = $this->db->prepare('DELETE FROM `UCRgrupo2`.`g4_Client` WHERE id = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin deleteClient
    
    //Función para agregar client de la base de datos
    public function addClient($name,$lastName,$telephone,$address,$email,$user,$password){
        $consulta = $this->db->prepare('INSERT INTO `UCRgrupo2`.`g4_Client` (`name`,`lastName`,`telephone`,`address`,`email`,`user`,`password`)VALUES("'.$name.'","'.$lastName.'","'.$telephone.'","'.$address.'","'.$email.'","'.$user.'","'.$password.'");');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin addClient
    
    //Función para actualizar cliente de la base de datos
    public function updateClient($id,$name,$lastName,$telephone,$address,$email,$user,$password){
        $consulta = $this->db->prepare('UPDATE `UCRgrupo2`.`g4_Client` SET `name` = "'.$name.'", `lastName` = "'.$lastName.'", `telephone` = "'.$telephone.'", `address` = "'.$address.'", `email` = "'.$email.'", `user` = "'.$user.'", `password` = "'.$password.'"  WHERE `id` = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin updateClient
    
    //Función para listar los clientes disponibles en la base de datos
    public function getClientsList( ){
        $consulta = $this->db->prepare('SELECT * FROM g4_Client;');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin getClientList
               
}//Fin Clase ClientAdminModel

