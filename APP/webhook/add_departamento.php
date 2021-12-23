<?php 
include_once"../control/controlDepartamento.php";
$params=[
	"id_departamento"=>"135",//$_POST['']
	"nombre"=>"MECANICA DE ARRANCONES",
	"id_plantel_fk"=>"1",
	"estatus"=>"1"
];
$result=insertDepartamento($params);
echo $result;