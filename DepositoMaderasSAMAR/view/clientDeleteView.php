<?php
include_once 'public/headerAdmin.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Eliminar Clientes</h3>
    </div>
    <div class="card-body">

        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
                <tr class="text-center">
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($vars['clientsList'] as $client) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $client[1] ?> <?php echo $client[2] ?></td>
                        <td class="text-center"><?php echo $client[3] ?></td>
                        <td class="text-center"><?php echo $client[5] ?></td>
                        <td class="text-center">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" action="?controlador=ClientAdmin&accion=deleteClient" method="POST">
                                <select class="form-control" name="id" id="id" style="display: none"required="required">
                                    <option value="<?php echo $client[0] ?>">0</option>
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
