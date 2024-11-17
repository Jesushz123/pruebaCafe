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
                    <a href="galeria.php" class="nav-item nav-link active">Galeria</a>
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
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">GALERIA DE NUESTROS PRODUCTOS</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- menu -->
    <?php require_once("theme_galeria.php"); ?>

    <!-- footer -->
    <?php require_once("theme_footer.php"); ?>
</body>

</html>