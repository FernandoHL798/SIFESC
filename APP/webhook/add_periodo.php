<?php 
include_once"../control/controlPeriodo.php";
$params=[
	"id_periodo"=>"1",
	"id_asignacion_fk"=>"1",
	"fecha_inscripcion"=>"2021-10-15",
	"fecha_altabaja"=>"2021-10-20"
];
var_dump(insertPeriodo($params));