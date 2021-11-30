<?php
include_once 'public/headerAdmin.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Administración Servicios</h3>
    </div>
    <div class="card-body">
        <div style="text-align: center">
            <a style="width:210px" class="btn btn-success btn-lg" id="btnAddProduct" href="?controlador=ServiceAdmin&accion=showAddServiceView" >Registrar Servicio</a>
        </div>

        <br/>

        <div style="text-align: center">            
            <a style="width:210px; color:white" class="btn btn-warning btn-lg" id="btnUpdateProduct" href="?controlador=ServiceAdmin&accion=showUpdateServiceView" >Modificar Servicio</a>
        </div>

        <br/>

        <div style="text-align: center">
            <a style="width:210px; background-color:lightseagreen; border-color:lightseagreen; color:white" class="btn btn-success btn-lg" id="btnSeeProducts" href="?controlador=ServiceAdmin&accion=showServiceView">Ver Servicios</a>
        </div>

        <br/>

        <div style="text-align: center">
            <a type="submit" style="width:210px" class="btn btn-danger btn-lg" id="btnDeleteProduct" href="?controlador=ServiceAdmin&accion=showDeleteServiceView">Eliminar Servicios</a>
        </div>
    </div>
    <!--/card-block-->
</div>

</br>
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
