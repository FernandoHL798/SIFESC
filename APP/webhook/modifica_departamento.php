<?php 
include_once"../control/controlDepartamento.php";
$params=[
	"id_departamento"=>"1",
	"nombre"=>"Matematicas",
	"id_plantel_fk"=>"1",
	"estatus"=>""
];
$result=updateDepartamento($params);
echo $result;