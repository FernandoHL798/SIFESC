<?php

function consultaEdificio(){
    include_once "../model/EDIFICIO.php";
    $EDIFICIO = new EDIFICIO();
    return json_encode($EDIFICIO->queryconsultaEdificio());
}

function updateEdificio($params){
    include_once "../model/EDIFICIO.php";
    $EDIFICIO = new EDIFICIO();
    $EDIFICIO->setIdEdificio($params['']);
    $EDIFICIO->setClave($params['']);
    $EDIFICIO->setPisos($params['']);
    return $EDIFICIO->queryUpdateEdificio();
}

function insertEdificio($params){
    include_once "../model/EDIFICIO.php";
    $EDIFICIO = new EDIFICIO();
    $EDIFICIO->setIdEdificio($params['']);
    $EDIFICIO->setIdPlantelFk($params['']);
    $EDIFICIO->setClave($params['']);
    $EDIFICIO->setPisos($params['']);
    return $EDIFICIO->queryInsertEdificio();
}

function deleteEdificio($idEdificio){
    include_once "../model/EDIFICIO.php";
    $EDIFICIO = new EDIFICIO();
    $EDIFICIO->setIdEdificio($idEdificio);
    return $EDIFICIO->queryDeleteEdificio();
}
