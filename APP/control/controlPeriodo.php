<?php

function consultaPeriodos(){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    return json_encode($PERIODO->queryconsultaPeriodo());
}

function updatePeriodo($params){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setIdPeriodo($params['id_periodo']);
    $PERIODO->setPeriodo($params['periodo']);
    $PERIODO->setFechaInscripcion($params['fecha_inscripcion_in']);
    $PERIODO->setFechaInscripcion($params['fecha_inscripcion_fin']);
    $PERIODO->setFechaAltasBajas($params['fecha_altabaja_in']);
    $PERIODO->setFechaAltasBajas($params['fecha_altabaja_fin']);
    $PERIODO->setFechaInscripcion($params['fecha_periodo_in']);
    $PERIODO->setFechaAltasBajas($params['fecha_periodo_fin']);
    $PERIODO->setEstatus($params['estatus']);
    return $PERIODO->queryUpdatePeriodo();
}

function insertPeriodo($params){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setIdPeriodo($params['id_periodo']);
    $PERIODO->setPeriodo($params['periodo']);
    $PERIODO->setFechaInscripcion($params['fecha_inscripcion_in']);
    $PERIODO->setFechaInscripcion($params['fecha_inscripcion_fin']);
    $PERIODO->setFechaAltasBajas($params['fecha_altabaja_in']);
    $PERIODO->setFechaAltasBajas($params['fecha_altabaja_fin']);
    $PERIODO->setFechaInscripcion($params['fecha_periodo_in']);
    $PERIODO->setFechaAltasBajas($params['fecha_periodo_fin']);
    $PERIODO->setEstatus($params['estatus']);
    return $PERIODO->queryInsertPeriodo();
}

function deletePeriodo($idPeriodo){
include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setIdPeriodo($idPeriodo);
    return $PERIODO->queryDeletePeriodo();
}