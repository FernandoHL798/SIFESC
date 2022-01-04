<?php

function consultaInscripcion($idPlan,$idUsuario){
    include_once "../model/INSCRIPCION.php";
    $INSCRIPCION = new INSCRIPCION();
    return json_encode($INSCRIPCION->queryconsultaInscripcion($idPlan,$idUsuario));
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
    $INSCRIPCION->setEstatus($params['estatus']);
    return $INSCRIPCION->queryUpdateInscripcion();
}

function updateEstatusInscripcion($params){
    include_once "../model/INSCRIPCION.php";
    $INSCRIPCION = new INSCRIPCION();
    $INSCRIPCION->setIdInscripcion($params['id_inscripcion']);
    return $INSCRIPCION->queryUpdateEstatusInscripcion($params);
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
    $INSCRIPCION->setEstatus($params['estatus']);
    return $INSCRIPCION->queryInsertInscripcion();
}

function deleteInscripcion($idInscripcion){
    include_once "../model/INSCRIPCION.php";
    $INSCRIPCION = new INSCRIPCION();
    $INSCRIPCION->setIdInscripcion($idInscripcion);
    return $INSCRIPCION->queryDeleteInscripcion();
}