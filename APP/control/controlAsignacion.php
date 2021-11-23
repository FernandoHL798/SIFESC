<?php
//LFHL
function consultaAsignacion($id_plan){
 include_once "../model/ASIGNACION.php";
 $ASIGNACION = new ASIGNACION();
 return json_encode($ASIGNACION->queryconsultaAsignacion($id_plan));
}

function updateAsignacion($params){
    include_once "../model/ASIGNACION.php";
    $ASIGNACION = new ASIGNACION();
    $ASIGNACION->setIdAsignacion($params['id_asignacion']);
    $ASIGNACION->setIdUsuarioProfesorFk($params['id_usuarioprofesor_fk']);
    $ASIGNACION->setIdGrupoFk($params['id_grupo_fk']);
    $ASIGNACION->setCupo($params['cupo']);
    return $ASIGNACION->queryUpdateAsignacion();
}

function insertAsignacion($params){
    include_once "../model/ASIGNACION.php";
    $ASIGNACION = new ASIGNACION();
    $ASIGNACION->setIdAsignacion($params['id_asignacion']);
    $ASIGNACION->setIdUsuarioProfesorFk($params['id_usuarioprofesor_fk']);
    $ASIGNACION->setIdGrupoFk($params['id_grupo_fk']);
    $ASIGNACION->setCupo($params['cupo']);
    return $ASIGNACION->queryInsertAsignacion();
}

function deleteAsignacion($idAsignacion){
    include_once "../model/ASIGNACION.php";
    $ASIGNACION = new ASIGNACION();
    $ASIGNACION->setIdAsignacion($idAsignacion);
    return $ASIGNACION->queryDeleteAsignacion();
}
