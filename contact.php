<!DOCTYPE html>
<html lang="es">

<!-- menu -->
<?php require_once("theme_header.php"); ?>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.php" class="navbar-brand px-lg-4 m-0 icon-back-home">
                <img class="position-relative" src="img/OhMyCoffeLogo.png" style="width: 50px; height: 50px;">
                <span class="m-0 text-white">Oh My Coffee</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                    <a href="about.php" class="nav-item nav-link">Oh My Coffee Sobre ruedas!!!</a>
                    <a href="galeria.php" class="nav-item nav-link">Galeria</a>
                    <a href="menu.php" class="nav-item nav-link">Promociones</a>
                    <a href="reservation.php" class="nav-item nav-link">Reservaciones</a>
                    <a href="contact.php" class="nav-item nav-link active">Contacto</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">CONTÁCTANOS</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <!-- <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contáctanos</h4>
                <h1 class="display-4">Siéntete libre de contactarnos</h1>
            </div> -->
            <div class="row px-3 pb-2">
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Domicilio</h4>
                    <p>Tequixquiac</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Teléfono OhMyCoffe</h4>
                    <p>55 7992 2681</p>
                    <p>55 4145 6165</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Email</h4>
                    <p>oohmy.coffee@gmail.com</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pb-5">
                    <iframe style="width: 100%; height: 443px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7502.553730606491!2d-99.15105730778677!3d19.912734425887137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1862d7813de93%3A0xe3c4a32f14416d90!2sOh%20My%20Coffee*21*21!5e0!3m2!1ses-419!2smx!4v1724476439825!5m2!1ses-419!2smx"
                        frameborder="0" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" tabindex="0"></iframe>
                </div>
                <div class="col-md-6 pb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="name"
                                    placeholder="Tu nombre" required="required"
                                    data-validation-required-message="Por favor dinos cómo te llamas" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control bg-transparent p-4" id="email"
                                    placeholder="Tu Email" required="required"
                                    data-validation-required-message="Tu email es requerido" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="subject"
                                    placeholder="Asunto" required="required"
                                    data-validation-required-message="Por favor dinos el motivo de tu mensaje" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control bg-transparent py-3 px-4" rows="5" id="message"
                                    placeholder="Mensaje" required="required"
                                    data-validation-required-message="Déjanos tu mensaje"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit"
                                    id="sendMessageButton">
                                    Enviar mensaje
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- footer -->
    <?php require_once("theme_footer.php"); ?>
</body>

</html>