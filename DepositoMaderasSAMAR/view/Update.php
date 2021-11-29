<?php
include_once 'OperacionesSql.php';
$op = new operaciones();

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$email = $_POST['email'];

echo 'el telefono es: '.$telephone.'';

$op->actualizarPersona($id, $name, $lastname, $telephone, $address, $email);

header('Location:?controlador=LogIn&accion=showClientsAdminView');
