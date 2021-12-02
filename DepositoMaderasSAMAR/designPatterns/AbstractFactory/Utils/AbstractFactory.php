<?php
//Interface del Abstract Factory donde vamos a tener un metodo encargado de crear los usuarios
interface AbstractFactory {

    public function createUser($type, $userName, $telephone, $password, $auxPassword);
    
}