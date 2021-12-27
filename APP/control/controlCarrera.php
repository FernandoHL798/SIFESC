<?php
function consultaCarrera($idPlan){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA();
   return json_encode($CARRERA->queryconsultaCarrera($idPlan));
}

function consultaCarreraAlumnos($idUsuario){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA();
   return json_encode($CARRERA->queryconsultaCarreraAlumnos($idUsuario));
}

function updateCarrera($params){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA();
    $CARRERA->setIdCarrera($params['id_carrera']);
    $CARRERA->setIdAreaFk($params['id_area_fk']);
    $CARRERA->setClave($params['clave']);
    $CARRERA->setNombre($params['nombre']);
    return $CARRERA->queryUpdateCarrera();
}

function insertCarrera($params){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA();
    $CARRERA->setIdCarrera($params['id_carrera']);
    $CARRERA->setIdAreaFk($params['id_area_fk']);
    $CARRERA->setClave($params['clave']);
    $CARRERA->setNombre($params['nombre']);
    return $CARRERA->queryInsertCarrera();
}

function deleteCarrera($idCarrera){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA();
    $CARRERA->setIdCarrera($idCarrera);
    return $CARRERA->queryDeleteCarrera();
}

function consultaListaCarreras(){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA();
    return json_encode($CARRERA->queryConsultaListaCarreras());
}