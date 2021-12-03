<?php

require 'designPatterns\Observer\Notify.php';
require 'model\ObserverModel.php';
require 'designPatterns\Observer\Client.php';
class ProductObserver extends Notify{


    public function __construct() {
    }//Fin constructor

    public function suscription(){
       $observerModel=new ObserverModel();
       $list=$observerModel->getClientsList();

        foreach ($list as $client) {
            $cliente = new Client($client['user'],$client['name'],$client["lastName"],0);
            $this->attach($cliente);
        }
       
        
    }
}