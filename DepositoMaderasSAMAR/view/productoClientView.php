<?php
include_once 'public/headerProductClient.php';
include_once 'view/serviceModalViewClient.php';
require_once 'public/boostrapJS.php';
?>

<?php if (isset($_SESSION["inSession"]['activarModal'] ) && $_SESSION["inSession"]['activarModal']  == 'Si') :
    ?>
    <div data-bs-toggle="modal" data-bs-target="#ServiceModal"></div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#ServiceModal").modal("show");
        });
    </script>
<?php endif; ?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Productos Disponibles</h3>
    </div>
    <div class="card-body">

        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr class="text-center">
                    <th>Medida</th>
                    <th>Precio</th>
                    <th>Detalles</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($vars['filas'][0]['productsList'] as $product) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $product[1] ?></td>
                        <td class="text-center">₡<?php echo $product[2] ?></td>
                        <td class="text-center"><?php echo $product[3] ?></td>
                        <td class="text-center"><?php echo $product[4] ?></td>
                        <td>
                        <a href="?controlador=ProductClient&accion=addProductInCart&codigo=<?= $product[0] ?>"  class="btn btn-secondary"> Reservacion</a></td>
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
