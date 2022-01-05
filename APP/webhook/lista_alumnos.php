<?php 
include_once"../control/controlAlumno.php";
$params=[
	"idUsuario"=>$_POST['idUsuario'],
	"idPlan"=>$_POST['idPlan'],
	"estatusPeriodo"=>$_POST['estatusPeriodo']
];
$result=consultaAlumno($params);
echo $result;