<?php

function consultaPeriodo(){
	include_once "../model/EMH_PRUEBA_PERIODO.php";
	$PERIODO = new PERIODO();
	return json_encode($PERIODO -> queryconsultaPeriodo());
}

function insertPeriodo($params){
	include_once "../model/EMH_PRUEBA_PERIODO.php";
	$PERIODO = new PERIODO();
	$PERIODO -> setIdPeriodo($params['id_periodo']);
	$PERIODO -> setPeriodo($params['periodo']);
	$PERIODO -> setFechaInscripcion($params['fecha_inscripcion']);
	$PERIODO -> setFechaAltasBajas($params['fecha_altas_bajas']);
	return $PERIODO -> queryInsertPeriodo();
}

function updatePeriodo(){
	include_once "../model/EMH_PRUEBA_PERIODO.php";
	$PERIODO = new PERIODO();
	$PERIODO -> setIdPeriodo($params['id_periodo']);
	$PERIODO -> setPeriodo($params['periodo']);
	$PERIODO -> setFechaInscripcion($params['fecha_inscripcion']);
	$PERIODO -> setFechaAltasBajas($params['fecha_altas_bajas']);
	return $PERIODO -> queryUpdatePeriodo();

}

function deletePeriodo($id_periodo){
	include_once "../model/EMH_PRUEBA_PERIODO.php";
	$PERIODO = new PERIODO();
	$PERIODO -> setIdPeriodo($id_periodo);
	return $PERIODO->queryDeletePeriodo();
}