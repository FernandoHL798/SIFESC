<?php

function consultaDosificacion(){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    return json_encode($DOSIFICACION->queryconsultaDosificacion());
}

function updateDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    $DOSIFICACION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $DOSIFICACION->setIdPeriodoFk($params['id_periodo_fk']);
    $DOSIFICACION->setFechaInscripcion($params['fecha_inscripcion']);
    $DOSIFICACION->setHoraInscripcion($params['hora_inscripcion']);
    $DOSIFICACION->setFechaAltaBaja($params['fecha_altabaja']);
    return $DOSIFICACION->queryUpdateDosificacion();
}

function insertDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    $DOSIFICACION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $DOSIFICACION->setIdPeriodoFk($params['id_periodo_fk']);
    $DOSIFICACION->setFechaInscripcion($params['fecha_inscripcion']);
    $DOSIFICACION->setHoraInscripcion($params['hora_inscripcion']);
    $DOSIFICACION->setFechaAltaBaja($params['fecha_altabaja']);
    return $DOSIFICACION->queryInsertDosificacion();
}

function deleteDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    $DOSIFICACION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $DOSIFICACION->setIdPeriodoFk($params['id_periodo_fk']);
    return $DOSIFICACION->queryDeleteDosificacion();
}