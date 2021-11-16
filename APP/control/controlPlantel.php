<?php 
function consultaPlantel(){
    include_once "../model/PLANTEL.php";
    $PLANTEL = new PLANTEL();
    return json_encode($PLANTEL->queryconsultaPlantel());
}

function updatePlantel($params){
    include_once "../model/PLANTEL.php";
    $PLANTEL = new PLANTEL();
    $PLANTEL->setNombre($params['nombre']);
    $PLANTEL->setIdPlantel($params['id_plantel']);
    return $PLANTEL->queryUpdatePlantel();
}

function insertPlantel($params){
    include_once "../model/PLANTEL.php";
    $PLANTEL = new PLANTEL();
    $PLANTEL->setIdPlantel($params['id_plantel']);
    $PLANTEL->setIdFacultadFk($params['id_facultad_fk']);
    $PLANTEL->setNombre($params['nombre']);
    return $PLANTEL->queryInsertPlantel();
}

function deletePlantel($idPlantel){
    include_once "../model/PLANTEL.php";
    $PLANTEL = new PLANTEL();
    $PLANTEL->setIdPlantel($idPlantel);
    return $PLANTEL->queryDeletePlantel();
}