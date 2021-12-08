<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SAMAR - Depósito de Maderas</title>

        <link rel="shortcut icon" type="image/x-icon" href="public//img/LogoSAMAR.ico"/> 
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/modern-business.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script type="text/javascript" src="public/js/javascript.js"></script>  
        <script type="text/javascript" src="public/js/jquery-3.3.1.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand"><img class="img-fluid" id="logo" src="public/img/logoNAVBAR.png" alt="logo" width="110"/></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="navbar-brand" href="?controlador=LogIn&accion=showMediatorClitView"><img class="img-fluid" id="logo" src="public/img/mensaje.png" alt="logo" width="40"/></a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="?controlador=ShoppingCart&accion=showShoppingCartView"><img class="img-fluid" id="logo" src="public/img/cariito.jpg" alt="logo" width="40"/></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controlador=ShoppingCart&accion=showShoppingCartView">Cesta</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="?controlador=ProductClient&accion=showProductView">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?controlador=Default">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">

            <br/>
            <br/>
            <br/>
            <br/>


            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Módulo Cliente</h1>

            <hr>
            <br/>

    

