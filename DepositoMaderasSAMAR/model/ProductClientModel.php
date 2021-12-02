<?php

class ProductClientModel {

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
    
    
    //Función para listar los productos disponibles en la base de datos
    public function getProductsList( ){
       
        $consulta = $this->db->prepare('SELECT * FROM g4_Product;');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        
        return $resultado;
    } //Fin getProductsList
       
    public function  insertProductWithItem($idItem,$idClient,$idProduct){
        print_r($idItem.$idClient);
        $consulta = $this->db->prepare('INSERT INTO `UCRgrupo2`.`g4_ProductWithItem` (`idItem`, `idProductInCart`,`idProduct`)VALUES("'.$idItem.'","'.$idClient.'","'.$idClient.'");');
        $consulta->execute();                       
        $consulta->CloseCursor();
        print_r("inserto");
    }
 
}//Fin Clase InventoryAdminModel

