<?php
include_once 'OperacionesSql.php';
$op = new Operaciones;
$op->deleteClient($_GET['id']);
header('Location:?controlador=LogIn&accion=showClientsAdminView');