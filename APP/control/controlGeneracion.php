<?php

function consultaGeneracion(){
    include_once "../model/GENERACION.php";
    $GENERACION = new GENERACION();
    return json_encode($GENERACION->queryconsultaGeneracion());
}

function updateGeneracion($params){
    include_once "../model/GENERACION.php";
    $GENERACION = new GENERACION();
    $GENERACION->setIdGeneracion($params['id_generacion']);
    $GENERACION->setIdPlanFk($params['id_plantel_fk']);
    $GENERACION->setAnio($params['anio']);
    return $GENERACION->queryUpdateGeneracion();
}

function insertGeneracion($params){
    include_once "../model/GENERACION.php";
    $GENERACION = new GENERACION();
    $GENERACION->setIdGeneracion($params['id_generacion']);
    $GENERACION->setIdPlanFk($params['id_plantel_fk']);
    $GENERACION->setAnio($params['anio']);
    return $GENERACION->queryInsertGeneracion();
}

function deleteGeneracion($idGeneracion){
    include_once "../model/GENERACION.php";
    $GENERACION = new GENERACION();
    $GENERACION->setIdGeneracion($idGeneracion);
    return $GENERACION->queryDeleteGeneracion();
}