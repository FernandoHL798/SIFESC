<?php

function consultaMovimiento($idInscripcion){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    return json_encode($MOVIMIENTO->queryconsultaMovimiento($idInscripcion));
}

function consultaAltasMovimiento($idInscripcion,$updated){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    return json_encode($MOVIMIENTO->queryconsultaAltasMovimiento($idInscripcion,$updated));
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
    $MOVIMIENTO->setSemestre($params['semestre']);
    $MOVIMIENTO->setCalificacion(0);
    $MOVIMIENTO->setAprobado(0);
    return $MOVIMIENTO->queryInsertMovimiento($params);
}

function deleteMovimiento($params){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    $MOVIMIENTO->setIdInscripcionFk($params['id_inscripcion_fk']);
    $MOVIMIENTO->setIdAsignacionFk($params['id_asignacion_fk']);
    return $MOVIMIENTO->queryDeleteMovimiento();
}

function consultaMovimientosAsignacion($idAsignacion,$idPlan){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    $resultado= $MOVIMIENTO->queryConsultaMovimientosAsignacion($idAsignacion,$idPlan);
    return json_encode($resultado);
}