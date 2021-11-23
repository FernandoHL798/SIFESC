<?php
function consultaFacultades(){
    include_once "../model/FACULTAD.php";
    $FACULTAD = new FACULTAD();
    return json_encode($FACULTAD->queryconsultaFacultad());
}

function insertFacultad($params){
    include_once "../model/FACULTAD.php";
    $FACULTAD = new FACULTAD();
    $FACULTAD->setIdFacultad($params['id_Facultad']);
    $FACULTAD->setNombreFacultad($params['nombre_fac']);
    return $FACULTAD->queryInsertFacultad();
}

function updateFacultad($params){
    include_once "../model/FACULTAD.php";
    $FACULTAD = new FACULTAD();
    $FACULTAD->setIdFacultad($params['id_Facultad']);
    $FACULTAD->setNombreFacultad($params['nombre_fac']);
    return $FACULTAD->queryUpdateFacultad();
}
function deleteFacultad($idFacultad){
    include_once "../model/FACULTAD.php";
    $FACULTAD = new FACULTAD();
    $FACULTAD->setIdFacultad($idFacultad);
    return $FACULTAD->queryDeleteFacultad();
}