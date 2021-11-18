<?php

function consultaSalones(){
    include_once "../model/SALON.php";
    $SALON = new SALON();
    return json_encode($SALON->queryconsultaSalon());
}

function updateSalon($params){
    include_once "../model/SALON.php";
    $SALON = new SALON();
    $SALON->setIdSalon($params)[''];
    $SALON->setIdEdificioFk($params['']);
    $SALON->setClave($params['']);
    return $SALON->queryUpdateSalon();
}

function insertSalon($params){
    include_once "../model/SALON.php";
    $SALON = new SALON();
    $SALON->setIdSalon($params)[''];
    $SALON->setIdEdificioFk($params['']);
    $SALON->setClave($params['']);
    return $SALON->queryInsertSalon();
}

function deleteSalon($idSalon){
    include_once "../model/SALON.php";
    $SALON = new SALON();
    $SALON->setIdSalon($params)[''];
    return $SALON->queryDelereSalon()    ;
}
