<?php 
include_once"../control/controlDepartamento.php";
$params=[
	"nombre"=>$_POST['nombre_depto_ag2'],
	"estatus"=>$_POST['estatus'],
	"id_plantel_fk"=>$_POST['id_plantel']
];
$result=updateEstatusDepartamento($params);
echo $result;