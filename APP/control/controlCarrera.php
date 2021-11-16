<?php
function consultaCarrera(){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA():
    return json_encode($CARRERA->queryconsultaCarrera());
}

function updateCarrera($params){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA():
    $CARRERA->setClave($params['']);
    $CARRERA->setNombre($params['']);
    return $CARRERA->queryUpdateCarrera();
}

function insertCarrera($params){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA():
    $CARRERA->setIdCarrera($params['']);
    $CARRERA->setClave($params['']);
    $CARRERA->setNombre($params['']);
    return $CARRERA->queryInsertCarrera();
}

function deleteCarrera($idCarrera){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA():
    $CARRERA->setIdCarrera($idCarrera);
    return $CARRERA->queryDeleteCarrera();
}