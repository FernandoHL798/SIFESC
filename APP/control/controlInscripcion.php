<?php

function consultaInscripcion(){
    include_once "../model/INSCRIPCION.php";
    $INSCRIPCION = new INSCRIPCION();
    return json_encode($INSCRIPCION->queryconsultaInscripcion());
}

function updateInscripcion($params){
    include_once "../model/INSCRIPCION.php";
    $INSCRIPCION = new INSCRIPCION();
    $INSCRIPCION->setIdInscripcion($params['id_inscripcion']);
    $INSCRIPCION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $INSCRIPCION->setIdPeriodoFk($params['id_periodo_fk']);
    $INSCRIPCION->setFechaInscripcion($params['fecha_inscripcion']);
    $INSCRIPCION->setHoraInscripcion($params['hora_inscripcion']);
    $INSCRIPCION->setFechaAltasBajas($params['fecha_altabaja']);
    $INSCRIPCION->setHoraAltasBajas($params['hora_altabaja']);
    return $INSCRIPCION->queryUpdateInscripcion();
}

function queryInsertInscripcion($params){
    include_once "../model/INSCRIPCION.php";
    $INSCRIPCION = new INSCRIPCION();
    $INSCRIPCION->setIdInscripcion($params['id_inscripcion']);
    $INSCRIPCION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $INSCRIPCION->setIdPeriodoFk($params['id_periodo_fk']);
    $INSCRIPCION->setFechaInscripcion($params['fecha_inscripcion']);
    $INSCRIPCION->setHoraInscripcion($params['hora_inscripcion']);
    $INSCRIPCION->setFechaAltasBajas($params['fecha_altabaja']);
    $INSCRIPCION->setHoraAltasBajas($params['hora_altabaja']);
    return $INSCRIPCION->queryInsertInscripcion();
}

function deleteInscripcion($idInscripcion){
    include_once "../model/INSCRIPCION.php";
    $INSCRIPCION = new INSCRIPCION();
    $INSCRIPCION->setIdInscripcion($idInscripcion);
    return $INSCRIPCION->queryDeleteInscripcion();
}