<?php

function consultaGrupos(){
    include_once "../model/GRUPOS.php";
    $GRUPOS = new GRUPOS();
    return json_encode($GRUPOS->queryconsultaGrupos());
}

function updateGrupos($params){
    include_once "../model/GRUPOS.php";
    $GRUPOS = new GRUPOS();
    $GRUPOS->setIdGrupo($params['']);
    $GRUPOS->setNombreGrupo($params['']);
    $GRUPOS->setIdAsignaturaFk($params['']);
    return $GRUPOS->queryUpdateGrupos();
}

function insertGrupos($params){
    include_once "../model/GRUPOS.php";
    $GRUPOS = new GRUPOS();
    $GRUPOS->setIdGrupo($params['']);
    $GRUPOS->setIdAsignaturaFk($params['']);
    $GRUPOS->setNombreGrupo($params['']);
    return $GRUPOS->queryInsertGrupos();
}

function deleteGrupo($idGrupo){
    include_once "../model/GRUPOS.php";
    $GRUPOS = new GRUPOS();
    $GRUPOS->setIdGrupo($idGrupo);
    return $GRUPOS->queryDeleteGrupos();
}