<?php 
include_once"../control/controlPlantelCarrera.php";
$params=[
	"id_plantel_fk"=>"1",
	"id_carrera_fk"=>"1",
	"aciertos_minimos"=>"50",
	"promedio_minimo"=>"8",
	"cupo"=>"10"
];
$result=updatePlantelCarrera($params);
echo $result;