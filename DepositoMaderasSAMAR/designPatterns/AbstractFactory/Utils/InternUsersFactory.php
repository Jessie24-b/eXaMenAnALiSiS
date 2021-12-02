<?php

//Clase que implementa el AbstractFactory en donde vamos a crear usuarios solamente internos por decirlo así, es decir 
//solo empleados o proveedores
class InternUsersFactory implements AbstractFactory
{
     function createUser($type, $userName, $telephone, $password, $auxPassword)
    {
        //Estructura de decisión donde dependiendo del tipo va a crear un usuario de empleado o proveedor
        switch ($type) {
            case 'Employee':
                $user =  new Employee();
                break;

            case 'Suplier':
                $user =  new Suplier();
                break;

            default:
                return null;
        }
        //Setters
        $user->userName = $userName;
        $user->telephone = $telephone;
        $user->password = $password;
        $user->auxPassword = $auxPassword;
        return $user;
    }
}