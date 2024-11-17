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
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>
                    <a href="about.php" class="nav-item nav-link">Oh My Coffee Sobre ruedas!!!</a>
                    <a href="galeria.php" class="nav-item nav-link">Galeria</a>
                    <a href="menu.php" class="nav-item nav-link">Promociones</a>
                    <a href="reservation.php" class="nav-item nav-link">Reservaciones</a>
                    <a href="contact.php" class="nav-item nav-link">Contacto</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/background.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h1 class="text-white font-weight-medium m-0 display-4">Oh My Coffee!!</h1>
                    <h2 class="text-primary font-weight-medium m-0" style="font-family: bradley hand, cursive;">Hacemos tu café con el corazón</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Acerca de nosotros</h4>
                <h1 class="display-4">En servicio desde 2015</h1>
            </div>
            <div class="info-container-home">
                <div>
                    <h1 class="mb-3">Nuestra historia</h1>
                    <h5 class="mb-3">Oh My Coffe!! Nace el 16 de Mayo de 2015 de la ides de compartir los aromas,
                        propiedades, beneficios y sabores del café.
                    </h5>
                    <h5 class="mb-3">Durante este tiempo hemos preparado a Baristas calificados para que no solo tomes nuestro cafe, sino lo degustes, te de energía y relaje tus sentidos.
                    </h5>
                    <h5 class="mb-3">
                    Para mejorar tu experiencia hemos incorporado una selección de alimentos y postres que te dejaran un buen sabor de boca.
                    </h5>
                </div>
                <div>
                    <div class="position-relative h-100">
                        <img class="position-relative" src="img/OhMyCoffeLogo.png" style="width: 100%;">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- menu -->
    <?php require_once("theme_menu.php"); ?>

    <!-- footer -->
    <?php require_once("theme_footer.php"); ?>
</body>

</html>