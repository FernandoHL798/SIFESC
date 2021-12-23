<?php 
include_once"../control/controlAsignacion.php";
$params=[
	"id_asignacion"=>$_POST['idAsignacionSat'],
	"cupo"=>$_POST['cupo']
];
$result=updateAsignacion($params);
echo $result;