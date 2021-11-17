<?php

function consultaEdificio(){
    include_once "../model/EDIFICIO.php";
    $EDIFICIO = new EDIFICIO();
    return json_encode($EDIFICIO->queryconsultaEdificio());
}

function updateEdificio($params){
    include_once "../model/EDIFICIO.php";
    $EDIFICIO = new EDIFICIO();
    $EDIFICIO->setIdEdificio($params['id_edificio']);
    $EDIFICIO->setClave($params['clave']);
    $EDIFICIO->setPisos($params['pisos']);
    return $EDIFICIO->queryUpdateEdificio();
}

function insertEdificio($params){
    include_once "../model/EDIFICIO.php";
    $EDIFICIO = new EDIFICIO();
    $EDIFICIO->setIdEdificio($params['id_edificio']);
    $EDIFICIO->setIdPlantelFk($params['id_plantel_fk']);
    $EDIFICIO->setClave($params['clave']);
    $EDIFICIO->setPisos($params['pisos']);
    return $EDIFICIO->queryInsertEdificio();
}

function deleteEdificio($idEdificio){
    include_once "../model/EDIFICIO.php";
    $EDIFICIO = new EDIFICIO();
    $EDIFICIO->setIdEdificio($idEdificio);
    return $EDIFICIO->queryDeleteEdificio();
}
