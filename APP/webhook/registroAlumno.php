<?php
//Este es un ejemplo para el mail que se dará uso despues
if (isset($_POST['correo']) ||
    isset($_POST['noSeguimiento']) ||
    isset($_POST['proyectName']))
{
    session_start();
    $nombreProyecto = $_POST['proyectName'];
    $email = $_POST['correo'];
    $empresa = $_SESSION['empresaName'];
    $noSeguimiento = $_POST['noSeguimiento'];

    include_once "./enviaMail.php";
    if (enviaCorreoInvitacionVistaPublica($nombreProyecto, $email, $empresa, $noSeguimiento))
        echo "Se ha enviado el link al correo: " . $email;
    else
        echo "Ocurrio un error interno en el servidod.<br> Vuelva a intentarlo";
} else {
    echo "El correo es incorrecto. Intentelo de nuevo";
}