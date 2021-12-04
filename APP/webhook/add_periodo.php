<?php 
include_once"../control/controlPeriodo.php";
$params=[
	"id_periodo"=>"1",
	"periodo"=>"2021-1",
	"fecha_inscripcion"=>"2021-10-15",
	"fecha_altabaja"=>"2021-10-20"
];
$result=insertPeriodo($params);
echo $result;