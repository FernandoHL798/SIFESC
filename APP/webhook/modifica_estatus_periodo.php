<?php 
include_once"../control/controlDepartamento.php";
$params=[
	"periodo"=>$_POST['periodoAg'],
	"estatus"=>$_POST['estatus'],
	"id_periodo"=>$_POST['idPeriodo']
];
$result=CambiaEstatusPeriodo($params);
echo $result;