<?php

function consultaSalones(){
    include_once "../model/SALON.php";
    $SALON = new SALON();
    return json_encode($SALON->queryconsultaSalon());
}

function updateSalon($params){
    include_once "../model/SALON.php";
    $SALON = new SALON();
    $SALON->setIdSalon($params['id_salon']);
    $SALON->setIdEdificioFk($params['id_edificio_fk']);
    $SALON->setClave($params['clave']);
    return $SALON->queryUpdateSalon();
}

function insertSalon($params){
    include_once "../model/SALON.php";
    $SALON = new SALON();
    $SALON->setIdSalon($params['id_salon']);
    $SALON->setIdEdificioFk($params['id_edificio_fk']);
    $SALON->setClave($params['clave']);
    return $SALON->queryInsertSalon();
}

function deleteSalon($idsalon){
    include_once "../model/SALON.php";
    $SALON = new SALON();
    $SALON->setIdSalon($idsalon);
    return $SALON->queryDeleteSalon();
}
