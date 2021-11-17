<?php
function consultaCarrera(){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA();
   return json_encode($CARRERA->queryconsultaCarrera());
}

function updateCarrera($params){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA();
    $CARRERA->setIdCarrera($params['id_carrera']);
    $CARRERA->setClave($params['clave']);
    $CARRERA->setNombre($params['nombre']);
    return $CARRERA->queryUpdateCarrera();
}

function insertCarrera($params){
    include_once "../model/CARRERA.php";
    $CARRERA = new CARRERA();
    $CARRERA->setIdCarrera($params['id_carrera']);
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