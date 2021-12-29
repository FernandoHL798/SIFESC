<?php 
include_once"../control/controlDepartamento.php";
$params=[

	"id_departamento"=>$_POST['clave_depto_ag2'],
	"nombre"=>$_POST['nombre_depto_ag2'],
	"id_plantel_fk"=>$_POST['id_plantel'],
	"estatus"=>"1"
];
$result=insertDepartamento($params);
echo $result;
