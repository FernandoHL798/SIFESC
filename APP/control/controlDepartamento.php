<?php

function consultaDepartamento(){
    include_once "../model/DEPARTAMENTO.php";
    $DEPARTAMENTO = new DEPARTAMENTO();
    return json_encode($DEPARTAMENTO->queryconsultaDepartamento());
}

function insertDepartamento($params){
    include_once "../model/DEPARTAMENTO.php";
    $DEPARTAMENTO = new DEPARTAMENTO();
    $DEPARTAMENTO->setIdDepartamento($params['id_departamento']);
    $DEPARTAMENTO->setNombre($params['nombre']);
    $DEPARTAMENTO->setIdAreaFk($params['id_area_fk']);
    return $DEPARTAMENTO->queryInsertDepartamento();
}

function updateDepartamento($params){
    include_once "../model/DEPARTAMENTO.php";
    $DEPARTAMENTO = new DEPARTAMENTO();
    $DEPARTAMENTO->setIdDepartamento($params['id_departamento']);
    $DEPARTAMENTO->setNombre($params['nombre']);
    $DEPARTAMENTO->setIdAreaFk($params['id_area_fk']);
    return $DEPARTAMENTO->queryUpdateDepartamento();
}

function deleteDepartamento($idDepartamento){
    include_once "../model/DEPARTAMENTO.php";
    $DEPARTAMENTO = new DEPARTAMENTO();
    $DEPARTAMENTO->setIdDepartamento($idDepartamento);
    return $DEPARTAMENTO->queryDeleteDepartamento();
}