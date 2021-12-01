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
                            <h3 class="text-center mb-0">Registro de Cliente</h3>
                        </div>

                        <div class="card-body lead">
                            <form class="form" role="form" autocomplete="off" id="formLogin" action="?controlador=Login&accion=createNewUser" enctype="multipart/form-data" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Apellido" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Teléfono" required="required">
                                </div>  
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Domicilio" required="required">
                                </div> 
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
                                </div> 
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user" id="user" placeholder="Usuario" required="required">
                                </div> 
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required="required">
                                </div> 
                                <select class="form-control" name="type" id="type" style="display: none"required="required">
                                    <option value="client">0</option>
                                </select> 

                                <!--Valores Nulos-->
                                <select class="form-control" name="fullName" id="fullName" style="display: none"required="required">
                                    <option value="NULL">0</option>
                                </select> 
                                <select class="form-control" name="age" id="age" style="display: none"required="required">
                                    <option value="NULL">0</option>
                                </select> 
                                <select class="form-control" name="typeWood" id="typeWood" style="display: none"required="required">
                                    <option value="NULL">0</option>
                                </select> 

                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-success btn-lg" id="btnLogin">Registrar</button>
                                </div>
                            </form>
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