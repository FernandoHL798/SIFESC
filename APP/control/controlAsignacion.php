<?php
//LFHL
function consultaAsignacion($id_plan){
 include_once "../model/ASIGNACION.php";
 $ASIGNACION = new ASIGNACION();
 return json_encode($ASIGNACION->queryconsultaAsignacion($id_plan));
}

function updateAsignacion($params){
    include_once "../model/ASIGNACION.php";
    $ASIGNACION = new ASIGNACION();
    $ASIGNACION->setIdAsignacion($params['']);
    $ASIGNACION->setIdUsuarioProfesorFk($params['']);
    $ASIGNACION->setIdGrupoFk($params['']);
    $ASIGNACION->setCupo($params['']);
    return $ASIGNACION->queryUpdateAsignacion();
}

function insertAsignacion($params){
    include_once "../model/ASIGNACION.php";
    $ASIGNACION = new ASIGNACION();
    $ASIGNACION->setIdAsignacion($params['']);
    $ASIGNACION->setIdUsuarioProfesorFk($params['']);
    $ASIGNACION->setIdGrupoFk($params['']);
    $ASIGNACION->setCupo($params['']);
    return $ASIGNACION->queryInsertAsignacion();
}

function deleteAsignacion($idAsignacion){
    include_once "../model/ASIGNACION.php";
    $ASIGNACION = new ASIGNACION();
    return $ASIGNACION->queryDeleteAsignacion($idAsignacion);
}
