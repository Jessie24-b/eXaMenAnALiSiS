<?php

//CLASE QUE CONTIENE EL PATRON DE DISEÑO APLICADO AL PROYECTO, DICHO PATRON DE DISEÑO ES EL FACTORY METHOD
//SE HIZO APARTE PARA UN MAYOR ENTENDIMIENTO

//BASICAMENTE EL PATRON DE DISEÑO FUE APLICADO PARA FACILITAR EL PROCESO DE CREADO DE USUARIOS DE LA PLATAFORMA, YA QUE 
//PUEDEN SER 3 (CLIENTES, EMPLEADOS Y PROVEEDORES), ASÍ REDUCIMOS CLASES Y CODIGO SOLO EN UNA GRACIAS AL FACTORY METHOD
class UserFactoryMethod
{
    //Variables globales de clase
    public $name;
    public $lastName;
    public $fullName;
    public $telephone;
    public $address;
    public $age;
    public $email;
    public $user;
    public $password;
    public $typeWood;
    
    public static function create($type, $name, $lastName, $fullName, $telephone, $address, $age, $email, $user, $password, $typeWood)
    {
        switch($type) {
            case 'employee':
                return new Employeee($fullName, $telephone, $address, $age);
            case 'client':
                return new Clientt($name, $lastName, $telephone, $address, $email, $user, $password);
            case 'suplier':
                return new Suplierr($name, $lastName, $telephone, $typeWood);
            default:
                return new Exception("No user found");
        }
    }

    public function getType()
    {
        return get_class($this);
    }
}

class Employeee extends UserFactoryMethod
{
    public function __construct($fullName, $telephone, $address, $age){
        $this->fullName = $fullName;
        $this->telephone = $telephone;
        $this->address = $address;
        $this->age = $age;
    }
}

class Clientt extends UserFactoryMethod
{
    public function __construct($name, $lastName, $telephone, $address, $email, $user, $password){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->telephone = $telephone;
        $this->address = $address;
        $this->email = $email;
        $this->user = $user;
        $this->password = $password;
    }
}

class Suplierr extends UserFactoryMethod
{
    public function __construct($name, $lastName, $telephone, $typeWood){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->telephone = $telephone;
        $this->typeWood = $typeWood;
    }
}