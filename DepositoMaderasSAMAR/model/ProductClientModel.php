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
        print_r("Entra");
        $consulta = $this->db->prepare('SELECT * FROM g4_Product;');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        print_r($resultado);
        return $resultado;
    } //Fin getProductsList
               
}//Fin Clase InventoryAdminModel

