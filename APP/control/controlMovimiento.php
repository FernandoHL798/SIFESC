<?php

function consultaMovimiento($idInscripcion){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    return json_encode($MOVIMIENTO->queryconsultaMovimiento($idInscripcion));
}

function updateMovimiento($params){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    $MOVIMIENTO->setEstatus($params['estatus']);
    $MOVIMIENTO->setIdInscripcionFk($params['id_inscripcion_fk']);
    $MOVIMIENTO->setIdAsignacionFk($params['id_asignacion_fk']);
    return $MOVIMIENTO->queryUpdateMovimiento();
}

function insertMovimiento($params){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    $MOVIMIENTO->setIdInscripcionFk($params['id_inscripcion_fk']);
    $MOVIMIENTO->setIdAsignacionFk($params['id_asignacion_fk']);
    $MOVIMIENTO->setEstatus("1");
    $MOVIMIENTO->setCalificacion(0);
    $MOVIMIENTO->setAprobado(0);
    return $MOVIMIENTO->queryInsertMovimiento();
}

function deleteMovimiento($params){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    $MOVIMIENTO->setIdInscripcionFk($params['id_inscripcion_fk']);
    $MOVIMIENTO->setIdAsignacionFk($params['id_asignacion_fk']);
    return $MOVIMIENTO->queryDeleteMovimiento();
}