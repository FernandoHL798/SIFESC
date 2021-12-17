<?php
if (isset($_POST['pw']) && isset($_POST['correo'])) {
    $pw = ($_POST['pw']);
    $correo = $_POST['correo'];

    include_once "../control/controlUsuario.php";
    if(verficaUsuario($correo,$pw)){
        $mje = array(
            "mjeType" => "1",
            "Mensaje" => "Cuenta verificada"
        );
    }
    else{
        $mje = array(
            "mjeType" => "0",
            "Mensaje" => "No existe la cuenta o la contraseña es incorrecta"
        );
    }
    echo json_encode($mje);
}
else{
    $mje = array(
        "mjeType" => "-1",
        "Mensaje" => "Error interno de PHP",
    );
    echo json_encode($mje);
}