<?php

function consultaDepartamento($idPlantel){
    include_once "../model/DEPARTAMENTO.php";
    $DEPARTAMENTO = new DEPARTAMENTO();
    return json_encode($DEPARTAMENTO->queryconsultaDepartamento($idPlantel));
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

function updateDepartamento($params,$estatus, $id_depto){
    include_once "../model/DEPARTAMENTO.php";
    $DEPARTAMENTO = new DEPARTAMENTO();
    $DEPARTAMENTO->setIdDepartamento($params['id_departamento']);
    $DEPARTAMENTO->setNombre($params['nombre']);
    $DEPARTAMENTO->setIdPlantelFk($params['id_plantel_fk']);
    return $DEPARTAMENTO->queryUpdateDepartamento($estatus, $id_depto);
}

function deleteDepartamento($idDepartamento,$estatus){
    include_once "../model/DEPARTAMENTO.php";
    $DEPARTAMENTO = new DEPARTAMENTO();
    $DEPARTAMENTO->setIdDepartamento($idDepartamento);
    return $DEPARTAMENTO->queryDeleteDepartamento($estatus);
}