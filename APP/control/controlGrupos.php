<?php

function consultaGrupos($idAsignatura,$idProfesor){
    include_once "../model/GRUPOS.php";
    $GRUPOS = new GRUPOS();
    return json_encode($GRUPOS->queryconsultaGrupos($idAsignatura,$idProfesor));
}

function consultaGruposPeriodo($idAsignatura,$idProfesor,$idPeriodo){
    include_once "../model/GRUPOS.php";
    $GRUPOS = new GRUPOS();
    return json_encode($GRUPOS->queryconsultaGruposPeriodo($idAsignatura,$idProfesor,$idPeriodo));
}

function updateGrupos($params){
    include_once "../model/GRUPOS.php";
    $GRUPOS = new GRUPOS();
    $GRUPOS->setIdGrupo($params['id_grupo']);
    $GRUPOS->setNombreGrupo($params['nombre']);
    $GRUPOS->setIdAsignaturaFk($params['id_asignatura_fk']);
    return $GRUPOS->queryUpdateGrupos();
}

function insertGrupos($params){
    include_once "../model/GRUPOS.php";
    $GRUPOS = new GRUPOS();
    $GRUPOS->setIdGrupo($params['id_grupo']);
    $GRUPOS->setIdAsignaturaFk($params['id_asignatura_fk']);
    $GRUPOS->setNombreGrupo($params['nombre']);
    return $GRUPOS->queryInsertGrupos();
}

function deleteGrupo($idGrupo){
    include_once "../model/GRUPOS.php";
    $GRUPOS = new GRUPOS();
    $GRUPOS->setIdGrupo($idGrupo);
    return $GRUPOS->queryDeleteGrupos();
}