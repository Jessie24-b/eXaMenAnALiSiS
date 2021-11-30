<?php

class ServiceAdminModel {

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

    //Función para eliminar service de la base de datos
    public function deleteService($id){
        $consulta = $this->db->prepare('DELETE FROM `UCRgrupo2`.`g4_item` WHERE id = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin deleteService
    
    //Función para agregar service de la base de datos
    public function addService($descrip,$price){
        $consulta = $this->db->prepare('INSERT INTO `UCRgrupo2`.`g4_item` (`description`, `price`)VALUES("'.$descrip.'","'.$price.'");');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin addService
    
    //Función para actualizar service de la base de datos
    public function updateService($id,$descrip,$price){
        $consulta = $this->db->prepare('UPDATE `UCRgrupo2`.`g4_item` SET `description` = "'.$descrip.'", `price` = "'.$price.'" WHERE `id` = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin updateService
    
    //Función para listar los servicios disponibles en la base de datos
    public function getServicesList( ){
        $consulta = $this->db->prepare('SELECT * FROM g4_item;');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin getServiceList
               
}//Fin Clase ServiceAdminModel

