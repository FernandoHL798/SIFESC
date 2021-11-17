<?php

function consultaMovimiento(){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    return json_encode($MOVIMIENTO->queryconsultaMovimiento());
}

function updateMovimiento($params){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    $MOVIMIENTO->setEstatus($params['']);
    $MOVIMIENTO->setCalificacion($params['']);
    $MOVIMIENTO->setAprobado($params['']);
    $MOVIMIENTO->setVecesCursado($params['']);
    $MOVIMIENTO->setIdInscripcionFk($params['']);
    $MOVIMIENTO->setIdAsignacionFk($params['']);
    return $MOVIMIENTO->queryUpdateMovimiento();
}

function insertMovimiento($params){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    $MOVIMIENTO->setIdInscripcionFk($params['']);
    $MOVIMIENTO->setIdAsignacionFk($params['']);
    $MOVIMIENTO->setEstatus($params['']);
    $MOVIMIENTO->setCalificacion($params['']);
    $MOVIMIENTO->setAprobado($params['']);
    $MOVIMIENTO->setVecesCursado($params['']);
    return $MOVIMIENTO->queryInsertMovimiento();
}

function deleteMovimiento($params){
    include_once "../model/MOVIMIENTO.php";
    $MOVIMIENTO = new MOVIMIENTO();
    $MOVIMIENTO->setIdInscripcionFk($params['']);
    $MOVIMIENTO->setAsignacionFk($params['']);
    return $MOVIMIENTO->queryDeleteMovimiento();
}