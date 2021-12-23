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
    $DEPARTAMENTO->setIdPlantelFk($params['id_plantel_fk']);
    $DEPARTAMENTO->setEstatus($params['estatus']);
    return $DEPARTAMENTO->queryInsertDepartamento($params);
}

function updateDepartamento($params){
    include_once "../model/DEPARTAMENTO.php";
    $DEPARTAMENTO = new DEPARTAMENTO();
    $DEPARTAMENTO->setIdDepartamento($params['id_departamento']);
    $DEPARTAMENTO->setNombre($params['nombre']);
    $DEPARTAMENTO->setIdPlantelFk($params['id_plantel_fk']);
    $DEPARTAMENTO->setEstatus($params['estatus']);
    return $DEPARTAMENTO->queryUpdateDepartamento();
}

function deleteDepartamento($idDepartamento,$estatus){
    include_once "../model/DEPARTAMENTO.php";
    $DEPARTAMENTO = new DEPARTAMENTO();
    $DEPARTAMENTO->setIdDepartamento($idDepartamento);
    return $DEPARTAMENTO->queryDeleteDepartamento($estatus);
}