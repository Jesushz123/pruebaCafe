<!DOCTYPE html>
<html lang="es">

<!-- menu -->
<?php require_once("theme_header.php"); ?>

<body>
    <?php
    require 'vendor/autoload.php';
    ?>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.php" class="navbar-brand px-lg-4 m-0 icon-back-home">
                <img class="position-relative" src="img/OhMyCoffeLogo.png" style="width: 50px; height: 50px;">
                <span class="m-0 text-white">Oh My Coffe</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                    <a href="about.php" class="nav-item nav-link">Oh My Coffe Sobre ruedas!!!</a>
                    <a href="galeria.php" class="nav-item nav-link">Galeria</a>
                    <a href="menu.php" class="nav-item nav-link">Promociones</a>
                    <a href="reservation.php" class="nav-item nav-link active">Reservaciones</a>
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
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Reservaciones</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="column-flex">
        <img class="coffe-branch" src="img/caffebranch.jpg" alt="SVG" width="100" height="100">
    </div>

    <!-- Reservation Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">Incríbles descuentos</h1>
                                <h1 class="text-white">Por reservar online</h1>
                            </div>
                            <p class="text-white">Lorem justo clita erat lorem labore ea, justo dolor lorem ipsum ut sed
                                eos,
                                ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea
                            </p>
                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet
                                </li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet
                                </li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Elige tu mesa</h1>
                            <form method="POST" action="reservation_actions.php" enctype="multipart/form-data" class="mb-5">
                                <div class="form-group">
                                    <input type="text" class="form-control border-primary p-4"
                                        placeholder="Nombre" required="required" name="name" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-primary p-4"
                                        placeholder="Email" required="required" name="email" />
                                </div>
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-primary p-4 datetimepicker-input"
                                            placeholder="Fecha" data-target="#date" data-toggle="datetimepicker" required="required" name="date" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-primary p-4 datetimepicker-input"
                                            placeholder="Hora" data-target="#time" data-toggle="datetimepicker" required="required" name="time" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <legend>Selecciona tu mesa</legend>
                                    <select class="custom-select border-primary px-4"
                                        style="height: 49px;" name="site" required="required">
                                        <option value="">S-1</option>
                                        <option value="">S-2</option>
                                        <option value="">S-3</option>
                                        <option value="">S-4</option>
                                        <option value="">M-1</option>
                                        <option value="">M-2</option>
                                        <option value="">M-3</option>
                                        <option value="">M-4</option>
                                        <option value="">M-5</option>
                                        <option value="">M-6</option>
                                        <option value="">M-7</option>
                                        <option value="">M-8</option>
                                        <option value="">M-9</option>
                                        <option value="">M-10</option>
                                        <option value="">M-11</option>
                                        <option value="">M-12</option>
                                        <option value="">M-13</option>
                                        <option value="">M-14</option>
                                        <option value="">M-15</option>
                                        <option value="">M-16</option>
                                        <option value="">M-17</option>
                                        <option value="">M-18</option>
                                        <option value="">T-1</option>
                                        <option value="">T-2</option>
                                        <option value="">T-3</option>
                                        <option value="">T-4</option>
                                        <option value="">T-5</option>
                                        <option value="">T-6</option>
                                        <option value="">T-7</option>
                                        <option value="">T-8</option>
                                        <option value="">T-9</option>
                                        <option value="">T-10</option>
                                        <option value="">T-11</option>
                                        <option value="">T-12</option>
                                    </select>
                                </div>

                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit" name="accion" value="Registrar">
                                        Reservar ahora
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->

    <!-- footer -->
    <?php require_once("theme_footer.php"); ?>
</body>

</html>
<style>
    .column-flex {
        display: flex;
        flex-direction: column;
    }

    .coffe-branch {
        width: 80%;
        height: 40%;
        align-self: center;
    }
</style>