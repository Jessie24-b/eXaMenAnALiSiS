<?php

class BD{

    private static $instance=NULL;

    public static function createInstance(){

        if(!isset( self::$instance)){

            $optionPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;

            self::$instance= new PDO('mysql:host=localhost;dbname=samar','root','',$optionPDO);
            echo "coneción realizada";
        }

        return self::$instance;
    }
}