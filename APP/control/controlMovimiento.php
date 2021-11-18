<?php

function consultaMovimiento(){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    return json_encode($MOVIMIENTO->queryconsultaMovimiento());
}

function updateMovimiento($params){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    $MOVIMIENTO->setEstatus($params['estatus']);
    $MOVIMIENTO->setCalificacion($params['calificacion']);
    $MOVIMIENTO->setAprobado($params['aprobado']);
    $MOVIMIENTO->setVecesCursado($params['veces_cursado']);
    $MOVIMIENTO->setIdInscripcionFk($params['id_inscripcion_fk']);
    $MOVIMIENTO->setIdAsignacionFk($params['id_asignacion_fk']);
    return $MOVIMIENTO->queryUpdateMovimiento();
}

function insertMovimiento($params){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    $MOVIMIENTO->setIdInscripcionFk($params['id_inscripcion_fk']);
    $MOVIMIENTO->setIdAsignacionFk($params['id_asignacion_fk']);
    $MOVIMIENTO->setEstatus($params['estatus']);
    $MOVIMIENTO->setCalificacion($params['calificacion']);
    $MOVIMIENTO->setAprobado($params['aprobado']);
    $MOVIMIENTO->setVecesCursado($params['veces_cursado']);
    return $MOVIMIENTO->queryInsertMovimiento();
}

function deleteMovimiento($params){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    $MOVIMIENTO->setIdInscripcionFk($params['id_inscripcion_fk']);
    $MOVIMIENTO->setIdAsignacionFk($params['id_asignacion_fk']);
    return $MOVIMIENTO->queryDeleteMovimiento();
}