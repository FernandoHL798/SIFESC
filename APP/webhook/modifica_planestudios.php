<?php 
include_once"../control/controlPlanEstudios.php";
$params=[
	"id_plan"=>"1",
	"id_carrera_fk"=>"1",
	"anio_plan"=>"2021",
	"creditos_ob"=>"80",
	"creditos_op"=>"20",
	"creditos_t"=>"100",
	"semestres"=>"9"
];
$result=updatePlan($params);
echo $result;