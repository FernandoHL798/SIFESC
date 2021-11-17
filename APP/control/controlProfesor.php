<?php
function consultaProfesor(){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    return json_encode($PROFESOR->queryconsultaProfesor());
}

function updateEstatusProfesor($params){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    $PROFESOR->setIdUsuarioFk($params['id_usuarioprofesor_fk']);
    $PROFESOR->setIdDepartamentoFk($params['id_departamento_fk']);
    $PROFESOR->setEstatus($params['estatus']);
    return $PROFESOR->queryUpdateEstatusProfesor();
}

function insertProfesor($params){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    $PROFESOR->setIdUsuarioFk($params['id_usuarioprofesor_fk']);
    $PROFESOR->setIdDepartamentoFk($params['id_departamento_fk']);
    $PROFESOR->setEstatus(1);
    return $PROFESOR->queryInsertProfesor();
}

function deleteProfesor($idUsuario){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    $PROFESOR->setIdUsuarioFk($idUsuario);
    return $PROFESOR->queryDeleteProfesor();
}