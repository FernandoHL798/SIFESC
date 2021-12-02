<?php

function consultaEstudia(){
    include_once "../model/ESTUDIA.php";
    $ESTUDIA = new ESTUDIA();
    return json_encode($ESTUDIA->queryconsultaEstudia());
}

function updateEstudia($params){
    include_once "../model/ESTUDIA.php";
    $ESTUDIA = new ESTUDIA();
    $ESTUDIA->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $ESTUDIA->setIdPlanFk($params['id_plan_fk']);
    $ESTUDIA->setAnio($params['anio']);
    $ESTUDIA->setTurno($params['turno']);//agregado turno
    $ESTUDIA->setBaja($params['baja']);//agregado baja
    return $ESTUDIA->queryUpdateEstudia();
}

function insertEstudia($params){
    include_once "../model/ESTUDIA.php";
    $ESTUDIA = new ESTUDIA();
    $ESTUDIA->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $ESTUDIA->setIdPlanFk($params['id_plan_fk']);
    $ESTUDIA->setAnio($params['anio']);
    $ESTUDIA->setTurno($params['turno']);//agregado turno
    $ESTUDIA->setBaja($params['baja']);//agregado baja
    $ESTUDIA->setEstatus($params['estatus']);//agregado estatus
    return $ESTUDIA->queryInsertEstudia();
}

function deleteEstudia($params){
    include_once "../model/ESTUDIA.php";
    $ESTUDIA = new ESTUDIA();
    $ESTUDIA->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $ESTUDIA->setIdPlanFk($params['id_plan_fk']);
    return $ESTUDIA>queryDeleteEstudia();
}

function updateEstatusEstudia($params){
    include_once "../model/ESTUDIA.php";
    $ESTUDIA = new ESTUDIA();
    $ESTUDIA->setEstatus($params['estatus']);
    $ESTUDIA->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $ESTUDIA->setIdPlanFk($params['id_plan_fk']);
    return $ESTUDIA->queryUpdateEstatusEstudia();
}