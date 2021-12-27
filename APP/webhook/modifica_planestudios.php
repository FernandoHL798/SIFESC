<?php
include_once"../control/controlPlanEstudios.php";
$params=[
	"id_plan"=>$_POST['clave_plan_estudios_edit'],
	"id_carrera_fk"=>$_POST['clave_carrera_edit'],
	"nombre_plan"=>$_POST['nombre_plan_e_edit'],
	"anio_plan"=>$_POST['limite_insc_x_periodo_edit'],
	"creditos_ob"=>$_POST['creditos_obli_edit'],
	"creditos_op"=>$_POST['creditos_opta_edit'],
	"creditos_t"=>$_POST['creditos_totales_edit'],
	"semestres"=>$_POST['Duracion_semestres_edit'],
	"maximo_creditos"=>$_POST['max_creditos_edit'],
	"minimo_creditos"=>$_POST['min_creditos_edit'],
	"maximo_semestres"=>$_POST['max_semestres_edit'],
	"minimo_materias"=>$_POST['min_materias_edit'],
	"maximo_materias"=>$_POST['max_materias_edit']
];

$result=updatePlan($params);
echo $result;


