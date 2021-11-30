<?php
include_once 'public/headerAdmin.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Registrar Empleado</h3>
    </div>
    <div class="card-body">
        <form class="form" role="form" autocomplete="off" id="formLogin" action="?controlador=EmployeeAdmin&accion=addEmployee" enctype="multipart/form-data" method="POST">
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
            <div style="text-align: center">
                <button type="submit" class="btn btn-success btn-lg" id="btnLogin">Registrar</button>
            </div>
            <p class="text-center" id="alreadyAdded" style="color: red"></p>
        </form>
    </div>
    <!--/card-block-->
</div>

</br>

<!--/No borrar -->
</div>

<div class="col-lg-1 mb-4"></div>

</div>

</div>
</div>
<!-- /.row -->

<?php
include_once 'public/footer.php';
?>
