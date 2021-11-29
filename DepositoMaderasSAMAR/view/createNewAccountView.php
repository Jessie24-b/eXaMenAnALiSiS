<?php
include_once 'public/header.php';
?>

<br/>
<br/>

<script type="text/javascript" src="public/js/formClient.js"></script>

<div id="logInView" class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- Formulario de registro de clientes -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Registro de Usuarios</h3>
                        </div>
                             
                        <div class="card-body lead">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control lead" name="name" placeholder="Nombre" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control lead" name="lastname" placeholder="Apellidos" required="required">
                                </div>
                                <div class="form-group">
                                <input type="text" class="form-control lead" name="telephone" placeholder="Teléfono" required="required" maxlength="8"> 
                                </div> 
                                <div class="form-group">
                                <input type="text" class="form-control lead" name="address" placeholder="Dirección" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control lead" name="email" placeholder="Correo" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control lead" name="user" placeholder="Nombre de Usuario" required="required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control lead" name="password" placeholder="Contraseña" required="required">
                                </div>        
                                <div class="form-group text-center">
                                    <label class="checkbox-inline"><input type="checkbox" required=""> Acepto los términos de uso &amp; políticas de privacidad.</label>
                                </div>
                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-success btn-lg" id="btnLogin" >Registrarse</button>
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


<?php

include_once 'public/footer.php';
?>