<?php
include_once"../control/controlPlanEstudios.php";
$params=[
	"id_plan"=>"-501",
	"id_carrera_fk"=>"1",
	"nombre_plan"=>"Lic. Informatica 2021",
	"anio_plan"=>"2021",
	"creditos_ob"=>"80",
	"creditos_op"=>"20",
	"creditos_t"=>"100",
	"semestres"=>"9",
	"maximo_creditos"=>"60",
	"minimo_creditos"=>"44",
	"maximo_semestres"=>"50",
	"minimo_materias"=>"4",
	"maximo_materias"=>"8",
	"estatus"=>"1"
];
$result=insertPlan($params);
echo $result;
