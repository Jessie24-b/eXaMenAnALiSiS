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
                            <h3 class="text-center mb-0">Registro de Empleado</h3>
                        </div>

                        <div class="card-body lead">
                            <form class="form" role="form" autocomplete="off" id="formLogin" action="?controlador=Login&accion=createNewUser" enctype="multipart/form-data" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Nombre Completo" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Teléfono" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Domicilio" required="required">
                                </div>  
                                <div class="form-group">
                                    <input type="text" class="form-control" name="age" id="age" placeholder="Edad" required="required">
                                </div>
                                <select class="form-control" name="type" id="type" style="display: none"required="required">
                                    <option value="employee">0</option>
                                </select> 

                                <!--Valores Nulos-->
                                <select class="form-control" name="name" id="name" style="display: none"required="required">
                                    <option value="NULL">0</option>
                                </select> 
                                <select class="form-control" name="lastName" id="lastName" style="display: none"required="required">
                                    <option value="NULL">0</option>
                                </select> 
                                <select class="form-control" name="email" id="email" style="display: none"required="required">
                                    <option value="NULL">0</option>
                                </select> 
                                <select class="form-control" name="user" id="user" style="display: none"required="required">
                                    <option value="NULL">0</option>
                                </select> 
                                <select class="form-control" name="password" id="password" style="display: none"required="required">
                                    <option value="NULL">0</option>
                                </select> 
                                <select class="form-control" name="typeWood" id="typeWood" style="display: none"required="required">
                                    <option value="NULL">0</option>
                                </select> 

                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-success btn-lg" id="btnLogin">Registrar</button>
                                </div>
                            </form>
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

</br>
</br>
</br>

<?php
include_once 'public/footer.php';
?>