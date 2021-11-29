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
    public function nombreFuncion($parametro1, $parametro2){
        $consulta = $this->db->prepare('call sp_nombreprocedimietnoalmacenado("'.$parametro1.'","'.$parametro2.'")');
        $consulta->execute();
        $consulta->CloseCursor();
    } //Fin nombreFuncion
    
    //Función para insertar y a la vez devolver un select de la base de datos
    public function nombreFuncion2($nombre,$precio,$descripcion,$imagen,$categoria){
        $consulta = $this->db->prepare('call sp_agregar_productos("'.$nombre.'","'.$precio.'","'.$descripcion.'","'.$imagen.'","'.$categoria.'")');
        $consulta->execute();
        $resultado=$consulta->fetchAll();
        $consulta->CloseCursor();
        return $resultado;
    } //Fin nombreFuncion2
               
}//Fin Clase LogInModel

