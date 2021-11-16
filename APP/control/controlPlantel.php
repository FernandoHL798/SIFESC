<?php 
function consultaPlantel(){
    include_once "../model/PLANTEL.php";
    $PLANTEL = new PLANTEL();
    return json_encode($PLANTEL->queryconsultaPlantel());
}

function updatePlantel($params){
    include_once "../model/PLANTEL.php";
    $PLANTEL = new PLANTEL();
    $PLANTEL->setNombre($params['']);
    $PLANTEL->setIdPlantel($params['']);
    return $PLANTEL->queryUpdatePlantel();
}

function insertPlantel($params){
    include_once "../model/PLANTEL.php";
    $PLANTEL = new PLANTEL();
    $PLANTEL->setIdPlantel($params['']);
    $PLANTEL->setIdFacultadFk($params['']);
    $PLANTEL->setNombre($params['']);
    return $PLANTEL->queryInsertPlantel();
}

function deletePlantel($idPlantel){
    include_once "../model/PLANTEL.php";
    $PLANTEL = new PLANTEL();
    $PLANTEL->setIdPlantel($idPlantel);
    return $PLANTEL->queryDeletePlantel();
}