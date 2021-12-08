<?php
function consultaPeriodoorb(){
	include_once "../model/Practica_ORB_Periodo.php";
	$Periodo_ORB = new Periodo_ORB();
	return json_encode($Periodo_ORB->queryconsultaPeriodoorb());
}

function insertPeriodoorb($params){
	include_once "../model/Practica_ORB_Periodo.php";
	$Periodo = new PERIODO_P_ORB();
	$Periodo->setIdPeriodoorb($params['id_periodo']);
	$Periodo->setPeriodoorb($params['periodo']);
	$Periodo->setFechaInscripcionorb($params['fecha_inscripcion']);
	$Periodo->setFechaAltasBajasorb($params['fecha_altas_bajas']);
	return $Periodo->queryInsertPeriodoorb();
}
function updatePeriodoorb(){
	include_once "../model/Practica_ORB_Periodo.php";
	$Periodo_ORB = new Periodo_ORB();
	$Periodo_ORB->setIdPeriodoorb($params['id_periodo']);
	$Periodo_ORB->setFechaInscripcionorb($params['periodo']);
	$Periodo_ORB->fecha_altas_bajasorb($params['fecha_inscripcion']);
	return $Periodo_ORB->queryUpdatePeriodoorb($params['fecha_altas_bajas']);
}
function deletePeriodoorb(){
	include_once "../model/Practica_ORB_Periodo.php";
	$Periodo_ORB = new Periodo_ORB();
	$Periodo_ORB->setIdPeriodoorb($id_periodoo);
	return $Periodo_ORB->queryDeletePeriodoorb();
}