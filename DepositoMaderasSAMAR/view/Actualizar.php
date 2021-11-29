<?php 
include_once 'public/header.php';
include_once 'view/OperacionesSql.php';
$op = new Operaciones();

$res = $op->buscarPersona($_GET['id']);

$id;
$name;
$lastname;
$telephone;
$address;
$email;

while($fila = mysqli_fetch_assoc($res))
{
    $id = $fila['id'];
    $name = $fila['name'];
    $lastname = $fila['lastname'];
    $telephone = $fila['telephone']; 
    $address = $fila['address'];
    $email = $fila['email'];
}


echo '  <div id="logInView" class="container py-5">
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
                        <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" action= ?controlador=LogIn&accion=modificar method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control lead" name="name" value="'.$name.'" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control lead" name="lastname" value="'.$lastname.'" required="required">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control lead" name="telephone" value="'.$telephone.'" required="required" maxlength="8"> 
                            </div> 
                            <div class="form-group">
                            <input type="text" class="form-control lead" name="address" value="'.$address.'" required="required">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control lead" name="email" value="'.$email.'" required="required">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control lead" name="id" value="'.$id.'" required="required">
                            </div>      
                            <div style="text-align: center">
                                <button type="submit" class="btn btn-success btn-lg" id="btnLogin" >Actualizar</button>
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
        ';
        include_once 'public/footer.php';

      
        