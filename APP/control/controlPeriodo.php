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
    $PERIODO->setIdAsignacionFk($params['id_asignacion_fk']);
    $PERIODO->setPeriodo($params['periodo']);
    $PERIODO->setFechaInscripcion($params['fecha_inscripcion']);
    $PERIODO->setFechaAltasBajas($params['fecha_altabaja']);
    return $PERIODO->queryUpdatePeriodo();
}

function insertPeriodo($params){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setIdPeriodo($params['id_periodo']);
    $PERIODO->setIdAsignacionFk($params['id_asignacion_fk']);
    $PERIODO->setPeriodo($params['periodo']);
    $PERIODO->setFechaInscripcion($params['fecha_inscripcion']);
    $PERIODO->setFechaAltasBajas($params['fecha_altabaja']);
    return $PERIODO->queryInsertPeriodo();
}

function deletePeriodo($idPeriodo){
include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setIdPeriodo($idPeriodo);
    return $PERIODO->queryDeletePeriodo();
}