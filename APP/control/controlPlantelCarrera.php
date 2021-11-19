<?php

function consultaPlantelCarrera(){
    include_once "../model/PLANTELCARRERA.php";
    $PLANTCAR = new PLANTELCARRERA();
    return json_encode($PLANTCAR->queryconsultaPlantelCarrera());
}

function updatePlantelCarrera($params){
    include_once "../model/PLANTELCARRERA.php";
    $PLANTCAR = new PLANTELCARRERA();
    $PLANTCAR->setIdPlantelFk($params['id_plantel_fk']);
    $PLANTCAR->setIdCarreraFk($params['id_carrera_fk']);
    $PLANTCAR->setAciertosMinimos($params['aciertos_minimos']);
    $PLANTCAR->setPromedioMinimo($params['promedio_minimo']);
    $PLANTCAR->setCupo($params['cupo']);
    return $PLANTCAR->queryUpdatePlantelCarrera();
}

function insertPlantelCarrera($params){
    include_once "../model/PLANTELCARRERA.php";
    $PLANTCAR = new PLANTELCARRERA();
    $PLANTCAR->setIdPlantelFk($params['id_plantel_fk']);
    $PLANTCAR->setIdCarreraFk($params['id_carrera_fk']);
    $PLANTCAR->setAciertosMinimos($params['aciertos_minimos']);
    $PLANTCAR->setPromedioMinimo($params['promedio_minimo']);
    $PLANTCAR->setCupo($params['cupo']);
    return $PLANTCAR->queryInsertPlantelCarrera();
}

function deletePlantelCarrera($params){
    include_once "../model/PLANTELCARRERA.php";
    $PLANTCAR = new PLANTELCARRERA();
    $PLANTCAR->setIdPlantelFk($params['id_plantel_fk']);
    $PLANTCAR->setIdCarreraFk($params['id_carrera_fk']);
    return $PLANTCAR->queryDeletePlantelCarrera();
}