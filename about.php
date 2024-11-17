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
                    <a href="about.php" class="nav-item nav-link active">Oh My Coffee Sobre ruedas!!!</a>
                    <a href="galeria.php" class="nav-item nav-link">Galeria</a>
                    <a href="menu.php" class="nav-item nav-link">Promociones</a>
                    <a href="reservation.php" class="nav-item nav-link">Reservaciones</a>
                    <a href="contact.php" class="nav-item nav-link">Contacto</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Oh My Coffe sobre ruedas</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">

            <div class="info-container-home">
                <div>
                    <h1 class="mb-3">Historia de Oh My Coffee sobre ruedas</h1>
                    <h5 class="mb-3">La leyenda cuenta que un jóven de Etiopía llamado Kaldi, vio el comportamiento
                        extraño que tenían sus cabras, las notaba más activas y con más energía después de consumir
                        bayas rojas.</h5>
                    <h5 class="mb-3">El pastor también las probó, asi es como se descubre el café, Kaldi decide
                        compartir estas bayas con los religiosos superiores, cuandotostaron los granos descubren un
                        exquisito olor y sabor.</h5>
                </div>
                <div class="position-relative h-100">
                    <img class="position-relative" src="img/about.png" style="width: 100%;">
                </div>
            </div>
            <center class="py-5">
                <a style="color: white;">
                    <h3 class="mb-3">VISÍTANOS EN OH MY COFFEE SOBRE RUEDAS!!!</h3>
                </a>

                <div class="col-md-6 pb-5">
                    <iframe style="width: 100%; height: 443px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7502.553730606491!2d-99.15105730778677!3d19.912734425887137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1862d7813de93%3A0xe3c4a32f14416d90!2sOh%20My%20Coffee*21*21!5e0!3m2!1ses-419!2smx!4v1724476439825!5m2!1ses-419!2smx"
                        frameborder="0" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" tabindex="0"></iframe>
                </div>
            </center>
        </div>
    </div>
    <!-- About End -->

    <!-- footer -->
    <?php require_once("theme_footer.php"); ?>
</body>

</html>