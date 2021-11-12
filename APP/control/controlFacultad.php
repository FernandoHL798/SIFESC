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