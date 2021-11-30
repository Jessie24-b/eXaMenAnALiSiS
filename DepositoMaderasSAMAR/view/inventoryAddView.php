<?php
include_once 'public/headerAdmin.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Registrar Producto</h3>
    </div>
    <div class="card-body">
        <form class="form" role="form" autocomplete="off" id="formLogin" action="?controlador=InventoryAdmin&accion=addProduct" enctype="multipart/form-data" method="POST">
            <label >Elija el proveedor del producto:</label>          
            <div class="form-group">
                <select class="form-control" name="suplier" id="suplier">
                    <?php
                    foreach ($vars['supliersList'] as $suplier) {
                        ?>
                        <option value="<?php echo $suplier[0] ?>"><?php echo $suplier[1] ?> <?php echo $suplier[2] ?></option>
                    <?php } ?>
                </select> 
            </div>   
            <div class="form-group">
                <input type="text" class="form-control" name="measure" id="measure" placeholder="Medida" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="price" id="price" placeholder="Precio" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="descrip" id="descrip" placeholder="Detalles" required="required">
            </div>  
            <div class="form-group">
                <input type="text" class="form-control" name="stock" id="stock" placeholder="Cantidad" required="required">
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
