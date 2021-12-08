<?php

require 'designPatterns\Observer\Notify.php';

class ProductObserver extends Notify {

    public function __construct() {
        
    }

//Fin constructor

    public function suscription($products) {

        require 'designPatterns\Observer\Client.php';
           
       $list=$products->getClientsListObserver();
       $list=$products->getClientsList();
       print_r($list);
        foreach ($list as $client) {
            $cliente = new Client($client['user'], $client['name'], $client["lastName"], 0);
            $this->attach($cliente);
        }
    }

}
