<?php 
include_once"../control/controlPeriodo.php";
$params=[
	"fecha_periodo_ini"=>$_POST['fechaInicioPeriodo'],
	"fecha_periodo_fin"=>$_POST['fechaFinPeriodo2']
];
$estatus = $_POST['estatus'];
$id_periodo=$_POST['idPeriodoM'];
$result=updatePeriodo($params, $estatus, $id_period);
echo $result;