<?php

class ObserverModel {

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

     //Función para agregar clientNotificado de la base de datos
     public function addClientNotify($userName,$name,$lastName,$notify){
        $consulta = $this->db->prepare('INSERT INTO `UCRgrupo2`.`g4_Client` (`userName`,`name`,`lastName`,`notify`)VALUES("'.$userName.'","'.$name.'","'.$lastName.'","'.$notify.'");');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin addClient

    //Función para listar los clientes Notificados disponibles en la base de datos
    public function getClientsNotifyList( ){
        $consulta = $this->db->prepare('SELECT * FROM g4_ClientsNotify;');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin getClientList

     //Función para listar los clientes disponibles en la base de datos
     public function getClientsList( ){
        $consulta = $this->db->prepare('SELECT * FROM g4_Client;');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin getClientList
               
}//Fin Clase ObserverModel

