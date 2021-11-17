<?php

function consultaDosificacion(){
    include_once "../model/DOSIFICACION.php";
    $DOSIFIACION = new DOSIFICACION();
    return json_encode($DOSIFIACION->queryconsultaDosificacion());
}

function updateDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFIACION = new DOSIFICACION();
    $DOSIFIACION->setIdUsuarioAlumnoFk($params['']);
    $DOSIFIACION->setFechaInscripcion($params['']);
    $DOSIFIACION->setHoraInscripcion($params['']);
    $DOSIFIACION->setFechaAltaBaja($params['']);
    return $DOSIFIACION->queryUpdateDosificacion();
}

function insertDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFIACION = new DOSIFICACION();
    $DOSIFIACION->setIdUsuarioAlumnoFk($params['']);
    $DOSIFIACION->setIdPeriodoFk($params['']);
    $DOSIFIACION->setFechaInscripcion($params['']);
    $DOSIFIACION->setHoraInscripcion($params['']);
    $DOSIFIACION->setFechaAltaBaja($params['']);
    return $DOSIFIACION->queryInsertDosificacion();
}

function deleteDosificacion($idDosificacion){
    include_once "../model/DOSIFICACION.php";
    $DOSIFIACION = new DOSIFICACION();
    $DOSIFIACION->setIdDosificacion($idDosificacion);
    return $DOSIFIACION->queryDeleteDosificacion();
}