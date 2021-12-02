<?php

class Client implements WorkerExtern {

    //Atributos globales de clase
    public $userName;
    public $telephone;
    public $password;
    public $auxPassword;

    //Funciones específicas que van a tener los usuarios clientes
    //Función que a modo de ejemplo para el patrón va a asignar un usuario al cliente
    public function assignUserName( )
    {
        $userName = $this->userName;
        
        return $userName;
    }
    //Función que a modo de ejemplo para el patrón va a asignar una contraseña al cliente
    public function assignPassword( )
    {
        $password = $this->password;
        
        return $password;
    }


}