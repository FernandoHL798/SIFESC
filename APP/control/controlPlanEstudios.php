<?php

function consultaPlanes(){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    return json_encode($PLAN->queryconsultaPlan());
}

function updatePlan($params){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    $PLAN->setIdPlan($params['id_plan']);
    $PLAN->setIdCarreraFk($params['id_carrera_fk']);
    $PLAN->setAnioPlan($params['anio_plan']);
    $PLAN->setCreditosObligatorios($params['creditos_ob']);
    $PLAN->setCreditosOptativos($params['creditos_op']);
    $PLAN->setCreditosTotales($params['creditos_t']);
    $PLAN->setSemestres($params['semestres']);
    return $PLAN->queryUpdatePlan();
}

function insertPlan($params){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    $PLAN->setIdPlan($params['id_plan']);
    $PLAN->setIdCarreraFk($params['id_carrera_fk']);
    $PLAN->setAnioPlan($params['anio_plan']);
    $PLAN->setCreditosObligatorios($params['creditos_ob']);
    $PLAN->setCreditosOptativos($params['creditos_op']);
    $PLAN->setCreditosTotales($params['creditos_t']);
    $PLAN->setSemestres($params['semestres']);
    return $PLAN->queryUpdatePlan();
    return $PLAN->queryInsertPlan();
}

function deletePlan($id_Plan){
    include_once "../model/PLANDEESTUDIOS.php";
    $PLAN = new PLANDEESTUDIOS();
    $PLAN->setIdPlan($id_Plan);
    return $PLAN->queryDeletePlan();
}