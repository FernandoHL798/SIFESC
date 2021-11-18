<?php

function consultaPlantelCarrera(){
    include_once "../model/PLANTELCARRERA.php";
    $PLANTCAR = new PLANTELCARRERA();
    return json_encode($PLANTCAR->queryconsultaPlantelCarrera());
}

function updatePlantelCarrera($params){
    include_once "../model/PLANTELCARRERA.php";
    $PLANTCAR = new PLANTELCARRERA();
    $PLANTCAR->setIdPlantelFk($params['']);
    $PLANTCAR->setIdCarreraFk($params['']);
    $PLANTCAR->setAciertosMinimos($params['']);
    $PLANTCAR->setPromedioMinimo($params['']);
    $PLANTCAR->setCupo($params['']);
    return $PLANTCAR->queryUpdatePlantelCarrera();
}

function insertPlantelCarrera($params){
    include_once "../model/PLANTELCARRERA.php";
    $PLANTCAR = new PLANTELCARRERA();
    $PLANTCAR->setIdPlantelFk($params['']);
    $PLANTCAR->setIdCarreraFk($params['']);
    $PLANTCAR->setAciertosMinimos($params['']);
    $PLANTCAR->setPromedioMinimo($params['']);
    $PLANTCAR->setCupo($params['']);
    return $PLANTCAR->queryInsertPlantelCarrera();
}

function deletePlantelCarrera($params){
    include_once "../model/PLANTELCARRERA.php";
    $PLANTCAR = new PLANTELCARRERA();
    $PLANTCAR->setIdPlantelFk($params['']);
    $PLANTCAR->setIdCarreraFk($params['']);
    return $PLANTCAR->queryDeletePlantelCarrera();
}