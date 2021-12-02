<?php

//Clase que implementa el AbstractFactory en donde vamos a crear usuarios solamente externos por decirlo así, es decir 
//solo clientes o otros si se desea en el futuro
class ExternUsersFactory implements AbstractFactory
{
     function createUser($type, $userName, $telephone, $password, $auxPassword)
    {
        //Estructura de decisión donde dependiendo del tipo va a crear un usuario de cliente o otro en el futuro
        switch ($type) {
            case 'Client':
                $user =  new Client();
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