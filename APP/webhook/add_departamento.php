<?php 
include_once"../control/controlDepartamento.php";
$params=[
	"id_departamento"=>"1",//$_POST['']
	"nombre"=>"Matematicas",
	"id_area_fk"=>"1",
	"estatus"=>""
];
$result=insertDepartamento($params);
echo $result;