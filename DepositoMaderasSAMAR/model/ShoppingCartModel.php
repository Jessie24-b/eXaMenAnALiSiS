<?php

class ShoppingCartModel {

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
    public function deleteProduct($id){
        $consulta = $this->db->prepare('DELETE FROM `UCRgrupo2`.`g4_Client` WHERE id = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin deleteClient
    
  
    //Función para actualizar cliente de la base de datos
    public function updateProduct($id,$name,$lastName,$telephone,$address,$email,$user,$password){
        $consulta = $this->db->prepare('UPDATE `UCRgrupo2`.`g4_Client` SET `name` = "'.$name.'", `lastName` = "'.$lastName.'", `telephone` = "'.$telephone.'", `address` = "'.$address.'", `email` = "'.$email.'", `user` = "'.$user.'", `password` = "'.$password.'"  WHERE `id` = "'.$id.'";');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin updateClient
    
    //Función para listar los clientes disponibles en la base de datos
    public function getProductList( ){
        $consulta = $this->db->prepare('SELECT * FROM g4_soldProducts;');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin getClientList
      
    public function  insertProductWithItem($idItem,$idClient,$idProduct){
        print_r($idItem.$idClient);
        $consulta = $this->db->prepare('INSERT INTO `UCRgrupo2`.`g4_ProductWithItem` (`idItem`, `idProductInCart`,`idProduct`)VALUES("'.$idItem.'","'.$idClient.'","'.$idProduct.'");');
        $consulta->execute();                       
        $consulta->CloseCursor();
        print_r("inserto");
    }
}//