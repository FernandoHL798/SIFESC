<?php
function consultaHorario(){
    include_once "../model/HORARIO.php";
    $HORARIO = new HORARIO();
    return json_encode($HORARIO->queryconsultaHorario());
}

function updateHorario($params){
    include_once "../model/HORARIO.php";
    $HORARIO = new HORARIO();
   $HORARIO->setIdHorario($params['id_horario']);
    $HORARIO->setIdGrupoFk($params['id_grupo_fk']);
    $HORARIO->setIdSalonFk($params['id_salon_fk']);
    $HORARIO->setInicio($params['inicio']);
    $HORARIO->setFin($params['fin']);
    $HORARIO->setDuracion($params['duracion']);
    $HORARIO->setDia($params['dia']);
    return $HORARIO->queryUpdateHorario();
}

function insertHorario($params){
    include_once "../model/HORARIO.php";
    $HORARIO = new HORARIO();
    $HORARIO->setIdHorario($params['id_horario']);
    $HORARIO->setIdGrupoFk($params['id_grupo_fk']);
    $HORARIO->setIdSalonFk($params['id_salon_fk']);
    $HORARIO->setInicio($params['inicio']);
    $HORARIO->setFin($params['fin']);
    $HORARIO->setDuracion($params['duracion']);
    $HORARIO->setDia($params['dia']);
    return $HORARIO->queryInsertHorario();
}

function deleteHorario($idHorario){
    include_once "../model/HORARIO.php";
    $HORARIO = new HORARIO();
    $HORARIO->setIdHorario($idHorario);
    return $HORARIO->queryDeleteHorario();
}