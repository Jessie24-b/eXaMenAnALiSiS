<!--Patron de Diseño Builder 
Su función en este sistema o proyecto PHP será construiir views de HTML, de esta manera reduciremos archivos
.php con views y así se reduce también código haciendo de cierta manera más ligera el proyecto.-->

<!--En este ejemplo tenemos un director, HTMLPageDirector, que recibe un builder, HTMLPageBuilder. El director 
le dice al builder cuál será el header de la view a construir, cuál será el contenido de la view a construir 
mediante varias líneas de texto HTML y por último le dice cual va a ser el footer de la view. Luego, el 
director le pide al builder que haga un ensamblaje final de las partes y devuelva la view deseada.-->

<?php

//Tenemos una clase llamada AbstractPageBuilder que va a funcionar como el builder
abstract class AbstractPageBuilder {

    abstract function getPage();
}

//Tenemos una clase llamada AbstractPageDirector que va a funcionar como el director
abstract class AbstractPageDirector {

    abstract function __construct(AbstractPageBuilder $builder_in);

    abstract function buildPage($view);

    abstract function getPage();
}

//Tenemos una clase llamada HTMLPage  que va a contener los atributos globales para montar views
class HTMLPage {

    //Atributos globales de la clase
    private $page = NULL;
    private $page_header = NULL;
    private $page_footer = NULL;
    private $page_text = NULL;

    //Constructor
    function __construct() {
        
    }

    //Metodo encargado de mostrar la view ya montada con todas sus partes.
    function showPage() {
        return $this->page;
    }

    //Setters de los atributos globales de la clase
    function setHeader($header_in) {
        $this->page_header = $header_in;
    }

    function setFooter($footer_in) {
        $this->page_footer = $footer_in;
    }

    function setText($text_in) {
        $this->page_text .= $text_in;
    }

    //Método encargado de darle formato a la view 
    function formatPage() {
        $this->page = $this->page_header;
        $this->page .= $this->page_text;
        $this->page .= $this->page_footer;
    }

}

//Metodo que extiende de la clase AbstractPageBuilder
class HTMLPageBuilder extends AbstractPageBuilder {

    private $page = NULL;

    //Constructor
    function __construct() {
        $this->page = new HTMLPage();
    }

    //Setters
    function setHeader($header_in) {
        $this->page->setHeader($header_in);
    }

    function setFooter($footer_in) {
        $this->page->setFooter($footer_in);
    }

    function setText($text_in) {
        $this->page->setText($text_in);
    }

    function formatPage() {
        $this->page->formatPage();
    }

    function getPage() {
        return $this->page;
    }

}

//HTMLPageDirector que extiende de AbstractPageDirector
class HTMLPageDirector extends AbstractPageDirector {

    private $builder = NULL;

    public function __construct(AbstractPageBuilder $builder_in) {
        $this->builder = $builder_in;
    }

    //Metodo encargado de contener el texto html de las views a construir
    public function buildPage($view) {
        $this->builder->setHeader(include_once 'public/header.php');
        
        //View CreateNewClientUserView
        if($view == "1"){
            
            //Codigo HTML CreateNewClientUserView
            $this->builder->setText('<br/> <br/> </br> </br> </br> </br> <script type="text/javascript" src="public/js/formClient.js"></script> <div id="logInView" class="container py-5"> <div class="row"> <div class="col-md-12"> <div class="row"> <div class="col-md-6 mx-auto"> <!-- Formulario de registro de clientes --> <div class="card rounded-0"> <div class="card-header"> <h3 class="text-center mb-0">Registro de Cliente</h3> </div> <div class="card-body lead"> <form class="form" role="form" autocomplete="off" id="formLogin" action="?controlador=Login&accion=createNewUser" enctype="multipart/form-data" method="POST"> <div class="form-group"> <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required="required">
                </div> <div class="form-group"> <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Apellido" required="required"> </div> <div class="form-group"> <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Teléfono" required="required"> </div> <div class="form-group"> <input type="text" class="form-control" name="address" id="address" placeholder="Domicilio" required="required"> </div> <div class="form-group"> <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required"> </div> <div class="form-group"> <input type="text" class="form-control" name="user" id="user" placeholder="Usuario" required="required"> </div>
                <div class="form-group"> <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required="required"> </div> <select class="form-control" name="type" id="type" style="display: none"required="required"> <option value="client">0</option> </select> <!--Valores Nulos--> <select class="form-control" name="fullName" id="fullName" style="display: none"required="required"> <option value="NULL">0</option> </select> <select class="form-control" name="age" id="age" style="display: none"required="required"> <option value="NULL">0</option> </select> <select class="form-control" name="typeWood" id="typeWood" style="display: none"required="required"> <option value="NULL">0</option>
                </select> <div style="text-align: center"> <button type="submit" class="btn btn-success btn-lg" id="btnLogin">Registrar</button> </div> </form> </br> <div style="text-align: center"> <a style="width:90px; color:white;" class="btn btn-danger btn-lg" id="btnBack" href="?controlador=LogIn&accion=showCreateNewUserView">Volver</a> </div> </div> <!--/card-block--> </div> <!-- /Formulario de Registro de clientes --> </div> </div> <!--/row--> </div> <!--/col--> </div> <!--/row--> </div> <!--/container--> <br/> <br/> </br>');

        } else if ($view == "2"){
            
            //Codigo HTML CreateNewEmployeeUserView
            $this->builder->setText('<br/> <br/> </br> </br> </br> </br> <script type="text/javascript" src="public/js/formClient.js"></script> <div id="logInView" class="container py-5"> <div class="row"> <div class="col-md-12"> <div class="row"> <div class="col-md-6 mx-auto"> <!-- Formulario de registro de clientes --> <div class="card rounded-0"> <div class="card-header"> <h3 class="text-center mb-0">Registro de Empleado</h3> </div> <div class="card-body lead"> <form class="form" role="form" autocomplete="off" id="formLogin" action="?controlador=Login&accion=createNewUser" enctype="multipart/form-data" method="POST">
                <div class="form-group"> <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Nombre Completo" required="required"> </div> <div class="form-group"> <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Teléfono" required="required"> </div> <div class="form-group"> <input type="text" class="form-control" name="address" id="address" placeholder="Domicilio" required="required"> </div> <div class="form-group"> <input type="text" class="form-control" name="age" id="age" placeholder="Edad" required="required"> </div> <select class="form-control" name="type" id="type" style="display: none"required="required">
                <option value="employee">0</option> </select> <!--Valores Nulos--> <select class="form-control" name="name" id="name" style="display: none"required="required"> <option value="NULL">0</option> </select> <select class="form-control" name="lastName" id="lastName" style="display: none"required="required"> <option value="NULL">0</option> </select> <select class="form-control" name="email" id="email" style="display: none"required="required"> <option value="NULL">0</option> </select> <select class="form-control" name="user" id="user" style="display: none"required="required"> <option value="NULL">0</option> </select> <select class="form-control" name="password" id="password" style="display: none"required="required">
                <option value="NULL">0</option> </select> <select class="form-control" name="typeWood" id="typeWood" style="display: none"required="required"> <option value="NULL">0</option> </select> <div style="text-align: center"> <button type="submit" class="btn btn-success btn-lg" id="btnLogin">Registrar</button> </div> </form> </br> <div style="text-align: center"> <a style="width:90px; color:white;" class="btn btn-danger btn-lg" id="btnBack" href="?controlador=LogIn&accion=showCreateNewUserView">Volver</a> </div> </div> <!--/card-block--> </div> <!-- /Formulario de Registro de clientes --> </div> </div> <!--/row--> </div> <!--/col--> </div> <!--/row--> </div> <!--/container--> </br> </br> </br>');
        }else {
            
            //Codigo HTML CreateNewSuplierUserView
            $this->builder->setText('<br/> <br/> </br> </br> </br> </br> <script type="text/javascript" src="public/js/formClient.js"></script> <div id="logInView" class="container py-5"> <div class="row"> <div class="col-md-12"> <div class="row"> <div class="col-md-6 mx-auto"> <!-- Formulario de registro de clientes --> <div class="card rounded-0"> <div class="card-header"> <h3 class="text-center mb-0">Registro de Proveedor</h3> </div> <div class="card-body lead"> <form class="form" role="form" autocomplete="off" id="formLogin" action="?controlador=Login&accion=createNewUser" enctype="multipart/form-data" method="POST"> <div class="form-group"> <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" required="required">
                </div> <div class="form-group"> <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Apellido" required="required"> </div> <div class="form-group"> <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Teléfono" required="required"> </div> <div class="form-group"> <input type="text" class="form-control" name="typeWood" id="typeWood" placeholder="Tipo Madera" required="required"> </div> <select class="form-control" name="type" id="type" style="display: none"required="required"> <option value="suplier">0</option> </select> <!--Valores Nulos--> <select class="form-control" name="fullName" id="fullName" style="display: none"required="required"> <option value="NULL">0</option>
                </select> <select class="form-control" name="address" id="address" style="display: none"required="required"> <option value="NULL">0</option> </select> <select class="form-control" name="age" id="age" style="display: none"required="required"> <option value="NULL">0</option> </select> <select class="form-control" name="user" id="user" style="display: none"required="required"> <option value="NULL">0</option> </select> <select class="form-control" name="password" id="password" style="display: none"required="required"> <option value="NULL">0</option> </select> <select class="form-control" name="email" id="email" style="display: none"required="required"> <option value="NULL">0</option> </select> <div style="text-align: center"> <button type="submit" class="btn btn-success btn-lg" id="btnLogin">Registrar</button>
                </div> </form> </br> <div style="text-align: center"> <a style="width:90px; color:white;" class="btn btn-danger btn-lg" id="btnBack" href="?controlador=LogIn&accion=showCreateNewUserView">Volver</a> </div> </div> <!--/card-block--> </div> <!-- /Formulario de Registro de clientes --> </div> </div> <!--/row--> </div> <!--/col--> </div> <!--/row--> </div> <!--/container--> </br> </br> </br>');
            
        }
               
        //Footer
        $this->builder->setFooter('</div> <!-- /.container --> <!-- Footer --> <footer class="py-5 bg-dark"> <div class="container"> <div class="m-0 text-center text-white"> © 2021 SAMAR - Depósito de Maderas </div> </div> </footer> <!-- Bootstrap core JavaScript --> <script src="https://code.jquery.com/jquery-3.3.1.js"></script> <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script> <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script> <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script> <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script> <script src="public/js/bootstrap.bundle.min.js"></script> <script> $(document).ready(function () { var table = $("#example").DataTable({ lengthChange: false, buttons: ["copy", "excel", "csv", "pdf", "colvis"]}); table.buttons().container() .appendTo("#example_wrapper .col-md-6:eq(0)"); }); </script> <script> $("#btnLogin").click(function (event) { //Fetch form to apply custom Bootstrap validation var form = $("#formLogin") if (form[0].checkValidity() === false) { event.preventDefault() event.stopPropagation() } form.addClass("was-validated"); }); </script> </body> </html>');
        $this->builder->formatPage();
    }

    //Metodo para obtener la view o pagine web montada
    public function getPage() {
        return $this->builder->getPage();
    }
}

?>
