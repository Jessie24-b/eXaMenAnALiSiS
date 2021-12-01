<?php
include_once 'public/headerClient.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Productos en carrito</h3>
    </div>
    <div class="card-body">

        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr class="text-center">
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Descuento</th>
                    <th>Monto total</th>
                    <th>Servicios</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($vars['productList'] as $product) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $product[2] ?></td>
                        <td class="text-center"><?php echo $product[3] ?></td>
                        <td class="text-center"><?php echo $product[4] ?></td>
                        <td class="text-center"><?php echo $product[5] ?></td>
                        <td>
                        <a class="btn badge-success" href="">agregar</a>
                        </td>
                        <td>
                            <a class="btn btn-info" href="">Editar</a>
                            <a class="btn btn-danger" href="">Eliminar</a>
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