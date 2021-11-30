<?php

class InventoryAdminModel {

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
    public function deleteProduct($id){
        $consulta = $this->db->prepare('DELETE FROM `UCRgrupo2`.`g4_Product` WHERE id = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin deleteProduct
    
    //Función para agregar producto de la base de datos
    public function addProduct($measure,$price,$details,$stock){
        $consulta = $this->db->prepare('INSERT INTO `UCRgrupo2`.`g4_Product`(`measure`,`price`,`details`,`stock`) VALUES ("'.$measure.'", "'.$price.'", "'.$details.'","'.$stock.'");');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin addProduct
    
    //Función para actualizar producto de la base de datos
    public function updateProduct($id,$measure,$price,$details,$stock){
        $consulta = $this->db->prepare('UPDATE `UCRgrupo2`.`g4_Product` SET `measure` = "'.$measure.'", `price` = "'.$price.'", `details` = "'.$details.'", `stock` = "'.$stock.'" WHERE `id` = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin updateProduct
    
    //Función para listar los productos disponibles en la base de datos
    public function getProductsList( ){
        $consulta = $this->db->prepare('SELECT * FROM g4_Product;');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin getProductsList
               
}//Fin Clase InventoryAdminModel

