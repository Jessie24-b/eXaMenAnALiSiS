<?php
include_once 'public/headerAdmin.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Actualizar Proveedor</h3>
    </div>
    <div class="card-body">
        <form class="form" role="form" autocomplete="off" id="formLogin" action="?controlador=SuplierAdmin&accion=updateSuplier" enctype="multipart/form-data" method="POST">

            <label >Elije el proveedor a actualizar:</label>          
            <div class="form-group">
                <select class="form-control" name="id" id="id">
                    <?php
                    foreach ($vars['supliersList'] as $suplier) {
                        ?>
                        <option value="<?php echo $suplier[0] ?>"><?php echo $suplier[1] ?> <?php echo $suplier[2] ?></option>
                    <?php } ?>
                </select> 
            </div>   
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Apellido" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Teléfono" required="required">
            </div>  
            <div class="form-group">
                <input type="text" class="form-control" name="typeWood" id="typeWood" placeholder="Tipo Madera" required="required">
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
