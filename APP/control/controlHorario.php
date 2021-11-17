<?php
function consultaHorario(){
    include_once "../model/HORARIO.php";
    $HORARIO = new HORARIO();
    return json_encode($HORARIO->queryconsultaHorario());
}

function updateHorario($params){
    include_once "../model/HORARIO.php";
    $HORARIO = new HORARIO();
    $HORARIO->setIdHorario($params['']);
    $HORARIO->setIdGrupoFk($params['']);
    $HORARIO->setIdSalonFk($params['']);
    $HORARIO->setInicio($params['']);
    $HORARIO->setFin($params['']);
    $HORARIO->setDuracion($params['']);
    $HORARIO->setDia($params['']);
    return $HORARIO->queryUpdateHorario();
}

function insertHorario($params){
    include_once "../model/HORARIO.php";
    $HORARIO = new HORARIO();
    $HORARIO->setIdHorario($params['']);
    $HORARIO->setIdGrupoFk($params['']);
    $HORARIO->setIdSalonFk($params['']);
    $HORARIO->setInicio($params['']);
    $HORARIO->setFin($params['']);
    $HORARIO->setDuracion($params['']);
    $HORARIO->setDia($params['']);
    return $HORARIO->queryInsertHorario();
}

function deleteHorario($idHorario){
    include_once "../model/HORARIO.php";
    $HORARIO = new HORARIO();
    $HORARIO->setIdHorario($idHorario);
    return $HORARIO->queryDeleteHorario();
}