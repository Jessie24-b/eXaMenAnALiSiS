<?php
//Configuration
require 'libs/Config.php';
$config = Config::singleton();
$config->set('controllerFolder', 'controller/'); //Nombre del folder , nombre del archivo
$config->set('modelFolder', 'model/');
$config->set('viewFolder', 'view/');

$config->set('dbhost','portalinfofc.com');
$config->set('dbname','UCRgrupo2');
$config->set('dbuser','grupodos');
$config->set('dbpass','j4slfAI0mC');
?>