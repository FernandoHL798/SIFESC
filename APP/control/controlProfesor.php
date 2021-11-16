<?php
function contulsaProfesor(){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    return json_encode($PROFESOR->queryconsultaProfesor());
}

function updateEstatusProfesor($params){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    $PROFESOR->setIdUsuarioFk($params['']);
    $PROFESOR->setEstatus($params['']);
    return $PROFESOR->queryUpdateEstatusProfesor();
}

function insertProfesor($params){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    $PROFESOR->seIdUsuarioFk($params['']);
    $PROFESOR->setEstatus(1);
    return $PROFESOR->queryInsertProfesor();
}

function deleteProfesor($idUsuario){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    $PROFESOR->setIdUsuarioFk($idUsuario);
    return $PROFESOR->queryDeleteProfesor();
}