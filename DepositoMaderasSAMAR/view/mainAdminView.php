<?php
include_once 'public/headerAdmin.php';
?>

<div class="card rounded-0">
    <div class="card-header">
        <h3 class="mb-0 text-center">Bienvenido/a {<?php echo($_SESSION["inSession"])?>} </h3>
        <h3 class="mb-0 text-center"><small>Sección Administrativa</small> </h3>
    </div>
    <div class="card-body">
        <p class="lead">Módulo encargado de ofrecer las herramientas necesarias para poder administrar todo lo relacionado con el Depósito de Maderas - SAMAR,
            en el lado izquierdo aparecen los permisos administrativos en los cuales tiene acceso.</p>
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

<hr>
<br/>
<br/>
<br/>

<?php
include_once 'public/footer.php';
?>
