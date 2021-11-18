<?php

function consultaDosificacion(){
    include_once "../model/DOSIFICACION.php";
    $DOSIFIACION = new DOSIFICACION();
    return json_encode($DOSIFIACION->queryconsultaDosificacion());
}

function updateDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFIACION = new DOSIFICACION();
    $DOSIFIACION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $DOSIFIACION->setIdPeriodoFk($params['id_periodo_fk']);
    $DOSIFIACION->setFechaInscripcion($params['fecha_inscripcion']);
    $DOSIFIACION->setHoraInscripcion($params['hora_inscripcion']);
    $DOSIFIACION->setFechaAltaBaja($params['fecha_altabaja']);
    return $DOSIFIACION->queryUpdateDosificacion();
}

function insertDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFIACION = new DOSIFICACION();
    $DOSIFIACION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $DOSIFIACION->setIdPeriodoFk($params['id_periodo_fk']);
    $DOSIFIACION->setFechaInscripcion($params['fecha_inscripcion']);
    $DOSIFIACION->setHoraInscripcion($params['hora_inscripcion']);
    $DOSIFIACION->setFechaAltaBaja($params['fecha_altabaja']);
    return $DOSIFIACION->queryInsertDosificacion();
}

function deleteDosificacion($idDosificacion){
    include_once "../model/DOSIFICACION.php";
    $DOSIFIACION = new DOSIFICACION();
    $DOSIFIACION->setIdDosificacion($idDosificacion);
    return $DOSIFIACION->queryDeleteDosificacion();
}