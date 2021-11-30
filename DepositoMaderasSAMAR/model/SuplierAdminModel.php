<?php

class SuplierAdminModel {

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

    //Función para eliminar proveedor de la base de datos
    public function deleteSuplier($id){
        $consulta = $this->db->prepare('DELETE FROM `UCRgrupo2`.`g4_Suplier` WHERE id = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin deleteSuplier
    
    //Función para agregar provedor de la base de datos
    public function addSuplier($name,$lastName,$telephone,$typeWood){
        $consulta = $this->db->prepare('INSERT INTO `UCRgrupo2`.`g4_Suplier`(`name`,`lastName`,`telephone`,`sellingPermitPicture`,`typeWood`) VALUES ("'.$name.'", "'.$lastName.'", "'.$telephone.'",NULL,"'.$typeWood.'");');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin addSuplier
    
    //Función para actualizar proveedor de la base de datos
    public function updateSuplier($id,$name,$lastName,$telephone,$typeWood){
        $consulta = $this->db->prepare('UPDATE `UCRgrupo2`.`g4_Suplier` SET `name` = "'.$name.'", `lastName` = "'.$lastName.'", `telephone` = "'.$telephone.'", `typeWood` = "'.$typeWood.'"  WHERE `id` = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin updateSuplier
    
    //Función para listar los proveedores disponibles en la base de datos
    public function getSupliersList( ){
        $consulta = $this->db->prepare('SELECT * FROM g4_Suplier;');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin getSupliersList
               
}//Fin Clase SuplierAdminModel

