<?php
include_once 'public/header.php';
?>

<br/>
<br/>
</br>
</br>
</br>
</br>

<script type="text/javascript" src="public/js/formClient.js"></script>

<div id="logInView" class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- Formulario de registro de clientes -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="text-center mb-0">Datos de Inicio de Sesión</h3>
                        </div>

                        <div class="card-body lead">
                            
                            <h3>Usuario: <?php echo $vars['userName'] ?></h3>
                        
                            <h3>Contraseña: <?php echo $vars['password'] ?></h2>
                            
                            <p>Presiona volver para regresar al menú de registro!</p>
                            
                            </br>
                            <div style="text-align: center">
                                <a style="width:90px; color:white;" class="btn btn-danger btn-lg" id="btnBack" href="?controlador=LogIn&accion=showCreateNewUserView">Volver</a>
                            </div>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /Formulario de Registro de clientes -->
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->

<br/>
<br/>
</br>
<br/>
</br>

<?php
include_once 'public/footer.php';
?>