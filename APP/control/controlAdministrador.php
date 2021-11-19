<?php
function consultaAdministradores(){

}

function insertAdministrador($idAdmin){
    include_once "../model/ADMINISTARDOR";
    $ADMIN = new ADMINISTRADOR();
    return $ADMIN->queryInsertAdministrador($idAdmin);
}