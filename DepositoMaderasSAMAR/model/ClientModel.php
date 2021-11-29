<?php

class ClientModel{

    public $id;
    public $name;
    public $lastname;
    public $telephone;
    public $address;
    public $email;
    public $user;
    public $password;

    public function __construct($id,$name,$lastname,$telephone,$address,$email,$user,$password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->telephone = $telephone;
        $this->address = $address;
        $this->email= $email;
        $this->user = $user;
        $this-> password = $password;

    }

    
    public static function getListClient(){
        $listClients=[];
        $conexion = BD::createInstance();
        $sql = $conexion->query("SELECT * FROM cliente");

        foreach($sql-> fetchAll() as $client){
            $listClients[] = new ClientModel($client['id'],$client['name'],$client['lastname'],$client['telephone'],
            $client['address'],$client['email'],$client['user'],$client['password']);
        }
        return $listClients;

    }


    public static function addClient($name,$lastname,$telephone,$address,$email,$user,$password){

        $conexion = BD::createInstance();

        $sql = $conexion->prepare("INSERT INTO cliente(name, lastname, telephone, address, email,
         user ,password) VALUES (?,?,?,?,?,?,?)");
        $sql->execute(array($name,$lastname,$telephone,$address,$email,$user,$password));

    }
}