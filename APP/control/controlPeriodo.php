<?php

function consultaPeriodos(){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    return json_encode($PERIODO->queryconsultaPeriodo());
}

function updatePeriodo($params){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setIdPeriodo($params['']);
    $PERIODO->setIdAsignacionFk($params['']);
    $PERIODO->setFechaInscripcion($params['']);
    $PERIODO->setFechaAltasBajas($params['']);
    return $PERIODO->queryUpdatePeriodo();
}

function insertPeriodo($params){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setIdPeriodo($params['']);
    $PERIODO->setIdAsignacionFk($params['']);
    $PERIODO->setFechaInscripcion($params['']);
    $PERIODO->setFechaAltasBajas($params['']);
    return $PERIODO->queryInsertPeriodo();
}

function deletePeriodo($idPeriodo)
include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setIdPeriodo($idPeriodo);
    return $PERIODO->queryDeletePeriodo();