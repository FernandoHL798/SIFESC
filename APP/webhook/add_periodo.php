<?php 
include_once"../control/controlPeriodo.php";
$params=[
	"id_periodo"=>"1",
	"periodo"=>"2021-1",
	"fecha_inscripcion_in"=>"2021-10-15",
	"fecha_inscripcion_fin"=>"2021-10-15",
	"fecha_altabaja_in"=>"2021-10-20",
	"fecha_altabaja_fin"=>"2021-10-20",
	"fecha_periodo_in"=>"2021-10-15",
	"fecha_periodo_fin"=>"2021-10-20",
	"estatus"=>""
];
$result=insertPeriodo($params);
echo $result;