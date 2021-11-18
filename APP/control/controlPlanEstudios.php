<?php

function consultaPlanes(){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    return json_encode($PLAN->queryconsultaPlan())
}

function updatePlan($params){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    $PLAN->setIdPlan($params['']);
    $PLAN->setIdCarreraFk($params['']);
    $PLAN->setAnioPlan($params['']);
    $PLAN->setCreditosObligatorios($params['']);
    $PLAN->setCreditosOptativos($params['']);
    $PLAN->setCreditosTotales($params['']);
    $PLAN->setSemestres($params['']);
    return $PLAN->queryUpdatePlan();
}

function insertPlan($params){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    $PLAN->setIdPlan($params['']);
    $PLAN->setIdCarreraFk($params['']);
    $PLAN->setAnioPlan($params['']);
    $PLAN->setCreditosObligatorios($params['']);
    $PLAN->setCreditosOptativos($params['']);
    $PLAN->setCreditosTotales($params['']);
    $PLAN->setSemestres($params['']);
    return $PLAN->queryInsertPlan();
}

function deletePlan($idPlan){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    $PLAN->setIdPlan($idPlan);
    return $PLAN->queryDeletePlan();
}