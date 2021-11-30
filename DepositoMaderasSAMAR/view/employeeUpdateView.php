<?php
include_once 'public/headerAdmin.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Actualizar Empleado</h3>
    </div>
    <div class="card-body">
        <form class="form" role="form" autocomplete="off" id="formLogin" action="?controlador=EmployeeAdmin&accion=updateEmployee" enctype="multipart/form-data" method="POST">

            <label >Elije el empleado a actualizar:</label>          
            <div class="form-group">
                <select class="form-control" name="id" id="id">
                    <?php
                    foreach ($vars['employeesList'] as $employee) {
                        ?>
                        <option value="<?php echo $employee[0] ?>"><?php echo $employee[1] ?></option>
                    <?php } ?>
                </select> 
            </div>   
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
                <button type="submit" class="btn btn-success btn-lg" id="btnLogin">Actualizar</button>
            </div>
            <p class="text-center" id="alreadyAdded" style="color: red"></p>
        </form>
    </div>
    <!--/card-block-->
</div>

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
