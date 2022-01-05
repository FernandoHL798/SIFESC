<?php

function consultaPeriodos(){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    return json_encode($PERIODO->queryconsultaPeriodo());
}

function consultaExistePeriodo($idPeriodo, $Periodo){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $resul = $PERIODO->queryconsultaExistePeriodo($idPeriodo, $Periodo);
    if(count($resul)>0) {
        return json_encode($resul);
    }else{
        return false;
   }    
}

function updatePeriodo($params, $estatus, $id_Period){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setFechaPeriodoInicio($params['fecha_periodo_ini']);
    $PERIODO->setFechaPeriodoFin($params['fecha_periodo_fin']);
    $PERIODO->setIdPeriodo($id_Period);
    return $PERIODO->queryUpdatePeriodo($estatus);
}
function CambiaEstatusPeriodo($params){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setPeriodo($params['periodo']);
    $PERIODO->setIdPeriodo($params['id_periodo']);
    return $PERIODO->queryCambiaEstatusPeriodo($params);
}

function insertPeriodo($params){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setIdPeriodo($params['id_periodo']);
    $PERIODO->setPeriodo($params['periodo']);
    $PERIODO->setFechaInscripcion($params['fecha_inscripcion_in']);
    $PERIODO->setFechaInscripcion($params['fecha_inscripcion_fin']);
    $PERIODO->setFechaAltasBajas($params['fecha_altabaja_in']);
    $PERIODO->setFechaAltasBajas($params['fecha_altabaja_fin']);
    $PERIODO->setFechaInscripcion($params['fecha_periodo_in']);
    $PERIODO->setFechaAltasBajas($params['fecha_periodo_fin']);
    $PERIODO->setEstatus($params['estatus']);
    return $PERIODO->queryInsertPeriodo();
}

function UpdateEstatusPeriodo($idPeriodoM, $estatus){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    $PERIODO->setIdPeriodo($idPeriodoM);
    return $PERIODO->queryUpdateEstatusPeriodo($estatus);
}
//Funcion para traer el ultimo periodo en la dosificacion
function consultaPeriodoUltimo(){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    return json_encode($PERIODO->queryConsultaPeriodoUltimo());
}
/*
function consultaContraUser(){
    include_once "../model/PERIODO.php";
    $PERIODO = new PERIODO();
    return json_encode($PERIODO->queryconsultaContraUser());
} */