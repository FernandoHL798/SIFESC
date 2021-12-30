<?php
//LFHL
function consultaAsignacion($id_plan,$idAsignatura,$Periodo){
 include_once "../model/ASIGNACION.php";
 $ASIGNACION = new ASIGNACION();
 return json_encode($ASIGNACION->queryconsultaAsignacion($id_plan,$idAsignatura,$Periodo));
}

function consultaAlumnoAsignacion($params){
 include_once "../model/ASIGNACION.php";
 $ASIGNACION = new ASIGNACION();
 return json_encode($ASIGNACION->queryconsultaAlumnoAsignacion($params));
}

function updateAsignacion($params){
    include_once "../model/ASIGNACION.php";
    $ASIGNACION = new ASIGNACION();
    $ASIGNACION->setIdAsignacion($params['id_asignacion']);
    $ASIGNACION->setCupo($params['cupo']);
    return $ASIGNACION->queryUpdateAsignacion();
}

function updateInscritosAsignacion($params){
    include_once "../model/ASIGNACION.php";
    $ASIGNACION = new ASIGNACION();
    $ASIGNACION->setIdAsignacion($params['id_asignacion']);
    $ASIGNACION->setInscritos($params['inscritos']);
    return $ASIGNACION->queryUpdateInscritosAsignacion();
}

function insertAsignacion($params){
    include_once "../model/ASIGNACION.php";
    $ASIGNACION = new ASIGNACION();
    $ASIGNACION->setIdAsignacion($params['id_asignacion']);
    $ASIGNACION->setIdUsuarioProfesorFk($params['id_usuarioprofesor_fk']);
    $ASIGNACION->setIdGrupoFk($params['id_grupo_fk']);
    $ASIGNACION->setIdPeriodoFk($params['id_periodo_fk']);
    $ASIGNACION->setCupo($params['cupo']);
    return $ASIGNACION->queryInsertAsignacion();
}

function deleteAsignacion($idAsignacion){
    include_once "../model/ASIGNACION.php";
    $ASIGNACION = new ASIGNACION();
    $ASIGNACION->setIdAsignacion($idAsignacion);
    return $ASIGNACION->queryDeleteAsignacion();
}
