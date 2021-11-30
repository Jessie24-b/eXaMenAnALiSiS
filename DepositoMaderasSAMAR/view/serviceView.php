<?php
include_once 'public/headerAdmin.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Servicios Disponibles</h3>
    </div>
    <div class="card-body">

        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr class="text-center">
                    <th>Descripción</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($vars['servicesList'] as $service) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $service[1] ?></td>
                        <td class="text-center"><?php echo $service[2] ?></td>
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
