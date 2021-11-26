<?php 
include_once"../control/controlPlantelCarrera.php";
$params=[
	"id_plantel_fk"=>"1",
	"id_carrera_fk"=>"1"
];	
$result=deletePlantelCarrera($params);
echo $result;