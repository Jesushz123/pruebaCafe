<?php
require 'vendor/autoload.php';

$reservation = new ruzdev\Reservations;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['accion'] === 'Registrar') {
        $_params = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'date' => $_POST['date'],
            'time' => $_POST['time'],
            'site' => $_POST['site'],
            'comment' => 'activa'
        );
        
        $rpt = $reservation->registrar($_params);

        if ($rpt)
            header('Location: reservation.php');
        else
            print 'Error al registrar el nuevo cliente';
    }

}
