<?php
//Configuration
require 'libs/Config.php';
$config = Config::singleton();
$config->set('controllerFolder', 'controller/'); //Nombre del folder , nombre del archivo
$config->set('modelFolder', 'model/');
$config->set('viewFolder', 'view/');

$config->set('dbhost','localhost');
$config->set('dbname','db_aplicada_proyecto1');
$config->set('dbuser','postgres');
$config->set('dbpass','1234');
?>