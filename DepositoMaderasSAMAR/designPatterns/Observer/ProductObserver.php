<?php

require 'designPatterns\Observer\Notify.php';
require 'model\ObserverModel.php';
require 'designPatterns\Observer\Client.php';
class ProductObserver extends Notify{


    public function __construct() {
    }//Fin constructor

   public function sale()
    {
        for ($i = 1; $i <= 10; $i++) {
         
        }
    }

    public function suscription(){
       $observerModel=new ObserverModel();
       $list=$observerModel->getClientsList();

        foreach ($list as $client) {
            $cliente = new Client($client['user'],$client['name'],$client['lastName'],false);
            $this->attach($cliente);
        }
        print_r($list);
        //print_r($this->getObservers());
    }
}