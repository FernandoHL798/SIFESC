<?php
function consultaProfesordepartamento($idUsuario){
    include_once "../model/PROFESORDEPARTAMENTO.php";
    $PROFESORDEP = new PROFESORDEPARTAMENTO();
    return json_encode($PROFESORDEP->queryconsultaProfesordepartamento($idUsuario));
}

function updateEstatusProfesordepartamento($params){
    include_once "../model/PROFESORDEPARTAMENTO.php";
    $PROFESORDEP = new PROFESORDEPARTAMENTO();
    $PROFESORDEP->setIdUsuarioFk($params['id_usuarioprofesor_fk']);
    $PROFESORDEP->setEstatus($params['estatus']);
    $PROFESORDEP->setIdDepartamentoFk($params['id_departamento_fk']);
    return $PROFESORDEP->queryUpdateEstatusProfesordepartamento();
}

function insertProfesordepartamento($params){
    include_once "../model/PROFESORDEPARTAMENTO.php";
    $PROFESORDEP = new PROFESORDEPARTAMENTO();
    $PROFESORDEP->setIdUsuario($params['id_usuarioprofesor_fk']);
    $PROFESORDEP->setEstatus($params['estatus']);
    $PROFESORDEP->setIdDepartamentoFk($params['id_departamento_fk']);
    return $PROFESORDEP->queryInsertProfesordepartamento();
}

function deleteProfesor($params){
    include_once "../model/PROFESORDEPARTAMENTO.php";
    $PROFESORDEP = new PROFESORDEPARTAMENTO();
    $PROFESORDEP->setIdUsuarioFk($params['id_usuarioprofesor_fk']);
    $PROFESORDEP->setIdDepartamentoFk($params['id_departamento_fk']);
    return $PROFESORDEP->queryDeleteProfesordepartamento();
}