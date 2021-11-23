<?php
function consultaAdministradores(){
    include_once "../model/ADMINISTRADOR.php";
    $ADMIN = new ADMINISTRADOR();
    $result = $ADMIN->queryConsultaAdministrador();
   return json_encode($result);
}

function insertAdministrador($idAdmin){
    include_once "../model/ADMINISTRADOR.php";
    $ADMIN = new ADMINISTRADOR();
    return $ADMIN->queryInsertAdministrador($idAdmin);
}

function deleteAdministrador($idAdmin){
    include_once "../model/ADMINISTRADOR.php";
    $ADMIN = new ADMINISTRADOR();
    return $ADMIN->queryDeleteAdministrador($idAdmin);
}