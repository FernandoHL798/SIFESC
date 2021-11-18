<?php
function consultaAreas(){
    include_once "../model/AREA.php";
    $AREA = new AREA();
    return json_encode($AREA->queryconsultaArea());
}

function updateArea($params){
    include_once "../model/AREA.php";
    $AREA = new AREA();
    $AREA->setIdArea($params['']);
    $AREA->setNombre($params[''])
    return $AREA->queryUpdateArea();
}

function insertArea($params){
    include_once "../model/AREA.php";
    $AREA = new AREA();
    $AREA->setIdArea($params['']);
    $AREA->setNombre($params[''])
    return $AREA->queryInsertArea();
}


function deleteArea($idArea){
    include_once "../model/AREA.php";
    $AREA = new AREA();
    $AREA->setIdArea($idArea);
    return $AREA->queryDeleteArea();
}