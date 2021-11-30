<?php
include_once 'public/headerAdmin.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Empleados Disponibles</h3>
    </div>
    <div class="card-body">

        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr class="text-center">
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Domicilio</th>
                    <th>Edad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($vars['employeesList'] as $employee) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $employee[1] ?></td>
                        <td class="text-center"><?php echo $employee[2] ?></td>
                        <td class="text-center"><?php echo $employee[3] ?></td>
                        <td class="text-center"><?php echo $employee[4] ?></td>
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
