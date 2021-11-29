<?php
include_once 'public/header.php';
?>
<br/>
<br/>
<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Contáctenos</h1>
<br/>
<!-- Content Row -->
<div class="row">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map --> 
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.677166952779!2d-85.00558268515636!3d10.83599896105417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDUwJzA5LjYiTiA4NcKwMDAnMTIuMiJX!5e0!3m2!1sen!2scr!4v1634497323529!5m2!1sen!2scr"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4">
        <h3>Información</h3>
        <p>
            700 mts oeste del cementerio de Cuatro Cruces, Upala, Alajuela, Costa Rica.
            <br>
        </p>
        <p>Teléfono: (+506) 8619-9916</p>
        <p>Correo Electrónico: <a href="mailto:ruizrunia@gmail.com">ruizrunia@gmail.com</a></p>
        <p>Horario: Lunes - Viernes 08:00 AM a 4:00 PM</p>
        <a href="https://www.facebook.com/pages/category/Product-Service/Maderas-samar-105024631691616/" target="_blank"><img src="public/img/facebookLogo.png" alt="" width="40" height="40"></a>
    </div>
</div>
<!-- /.row -->

<!-- Contact Form -->
<div class="row">
    <div class="col-lg-8 mb-4">
        <h3>Envíanos un mensaje</h3>
        <form name="sentMessage" id="contactForm">
            <div class="control-group form-group">
                <div class="controls">
                    <label>Nombre Completo:</label>
                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Teléfono:</label>
                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Correo Electrónico:</label>
                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Mensaje:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
        </form>
    </div>

</div>
<!-- /.row -->

<?php
include_once 'public/footer.php';
?>