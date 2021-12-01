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
                            <h3 class="text-center mb-0">Registro de Usuarios</h3>
                        </div>

                        <div class="card-body lead">
                            <div style="text-align: center">
                                <a style="width:210px" class="btn btn-success btn-lg" id="btnAddProduct" href="?controlador=Login&accion=showCreateNewEmployeeUserView" >Soy Empleado</a>
                            </div>

                            <br/>

                            <div style="text-align: center">            
                                <a style="width:210px;" class="btn btn-success btn-lg" id="btnUpdateProduct" href="?controlador=Login&accion=showCreateNewClientUserView" >Soy Cliente</a>
                            </div>

                            <br/>

                            <div style="text-align: center">
                                <a style="width:210px;" class="btn btn-success btn-lg" id="btnSeeProducts" href="?controlador=Login&accion=showCreateNewSuplierUserView">Soy Proveedor</a>
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
</br>
</br>

<?php
include_once 'public/footer.php';
?>