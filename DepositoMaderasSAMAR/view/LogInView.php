<?php
include_once 'public/header.php';
?>
<br/>
<br/>
<br/>
<br/>

<div id="logInView" class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- Formulario de Inicio de Sesion -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0 text-center">Inicio de Sesión</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" action="?controlador=LogIn&accion=showMainAdminView" method="post">
                                <div class="form-group lead">
                                    <label for="uname1">Usuario</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" required="">
                                    <div class="invalid-feedback">Ingrese un usuario.</div>
                                </div>
                                <div class="form-group lead">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password">
                                    <div class="invalid-feedback">Ingrese una contraseña.</div>
                                </div>
                               <!-- <p style="color: red">
                                    @ViewBag.Message
                                </p>-->
                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-success btn-lg" id="btnLogin">Iniciar Sesión</button>
                                </div>
                            </form>
                            <br/>
                            <div class="text-center">
                                <a href="?controlador=LogIn&accion=showCreateNewUserView" class="lead">¿Eres nuevo? Registrate </a>
                            </div>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /Formulario de Inicio de Sesion -->
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
<br/>
<br/>

<?php
include_once 'public/footer.php';
?>
