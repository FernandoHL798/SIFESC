<?php

function consultaInscripcion(){
    include_once "../model/INSCRIPCION.php";
    $INSCRIPCION = new INSCRIPCION();
    return json_encode($INSCRIPCION->queryconsultaInscripcion());
}

function updateInscripcion($params){
    include_once "../model/INSCRIPCION.php";
    $INSCRIPCION = new INSCRIPCION();
    $INSCRIPCION->setIdInscripcion($params['']);
    $INSCRIPCION->setIdUsuarioAlumnoFk($params['']);
    $INSCRIPCION->setIdPeriodoFk($params['']);
    $INSCRIPCION->setFechaInscripcion($params[''])
    $INSCRIPCION->setHoraInscripcion($params['']);
    $INSCRIPCION->setFechaAltasBajas($params['']);
    $INSCRIPCION->setHoraAltasBajas($params['']);
    return $INSCRIPCION->queryUpdateInscripcion();
}

function queryInsertInscripcion($params){
    include_once "../model/INSCRIPCION.php";
    $INSCRIPCION = new INSCRIPCION();
    $INSCRIPCION->setIdInscripcion($params['']);
    $INSCRIPCION->setIdUsuarioAlumnoFk($params['']);
    $INSCRIPCION->setIdPeriodoFk($params['']);
    $INSCRIPCION->setFechaInscripcion($params[''])
    $INSCRIPCION->setHoraInscripcion($params['']);
    $INSCRIPCION->setFechaAltasBajas($params['']);
    $INSCRIPCION->setHoraAltasBajas($params['']);
    return $INSCRIPCION->queryInsertInscripcion();
}

function deleteInscripcion($idInscripcion){
    include_once "../model/INSCRIPCION.php";
    $INSCRIPCION = new INSCRIPCION();
    $INSCRIPCION->setIdInscripcion($idInscripcion);
    return $INSCRIPCION->queryDeleteInscripcion();
}