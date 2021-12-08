<?php

class Employee implements WorkerIntern {
    
    //Atributos globales de clase
    public $userName;
    public $telephone;
    public $password;
    public $auxPassword;

    //Funciones específicas que van a tener los usuarios empleados
    //Función asignar nombre de usuario
    function assignUserName( )
    {
        
        $userName = 'Emp'.substr( $this->userName, 0, 5).substr( $this->telephone, 0, 2);
        
        return $userName;
    }

    //Función
    public function assignPassword( )
    {
        $password = '';
        $total = 0;

        do
        {
            if (rand(0, 1) == 0)
            {
                $password.= chr(rand(97, 122)); // ASCII code from **a(97)** to **z(122)**
            }
            else
            {
                $password.= rand(0, 9); // Numbers!!
            }
            $total++;
        } while ($total < 8);

        return $password;
    }
}