<?php
include_once 'public/headerAdmin.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Administración Empleados</h3>
    </div>
    <div class="card-body">
        <form class="form" role="form" autocomplete="off" id="formLogin" action="#" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="productName" id="productName" placeholder="Ejemplo" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="price" id="price" placeholder="Ejemplo" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="descrip" id="descrip" placeholder="Ejemplo" required="required">
            </div>   
            <label >Elija una categoría:</label>          
            <div class="form-group">
                <select class="form-control" name="category" id="category">
                        <option value="#">Ejemplo</option>
                </select> 
            </div>   
            <label >Seleccione la imagen:</label>        
            <div class="form-group">
                <input type="file" id="img_product" name="img_product" accept="image/png, image/jpeg">
            </div> 
            <div style="text-align: center">
                <button type="submit" class="btn btn-success btn-lg" id="btnLogin">Ejemplo</button>
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
