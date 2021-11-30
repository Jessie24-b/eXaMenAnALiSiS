<?php
include_once 'public/headerAdmin.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Eliminar Empleados</h3>
    </div>
    <div class="card-body">

        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr class="text-center">
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Edad</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($vars['employeesList'] as $employee) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $employee[1] ?></td>
                        <td class="text-center"><?php echo $employee[2] ?></td>
                        <td class="text-center"><?php echo $employee[4] ?></td>
                        <td class="text-center">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" action="?controlador=EmployeeAdmin&accion=deleteEmployee" method="POST">
                                <select class="form-control" name="id" id="id" style="display: none"required="required">
                                    <option value="<?php echo $employee[0] ?>">0</option>
                                </select> 
                                <button style="font-size: 13px" type="submit" class="btn btn-danger btn-sm" id="deleteButton"><i class="material-icons md-18" >delete</i></button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

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
