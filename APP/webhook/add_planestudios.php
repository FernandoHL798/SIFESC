<?php
include_once"../control/controlPlanEstudios.php";
$params=[
	"id_plan"=>$_POST['clave_plan_est'],
	"id_carrera_fk"=>$_POST['clave_carr'],
	"nombre_plan"=>$_POST['nombre_planEstudios'],
	"anio_plan"=>$_POST['limite_insc'],
	"creditos_ob"=>$_POST['creditos_oblig'],
	"creditos_op"=>$_POST['credito_op'],
	"creditos_t"=>$_POST['creditos_tot'],
	"semestres"=>$_POST['Dur_sem'],
	"maximo_creditos"=>$_POST['max_cred'],
	"minimo_creditos"=>$_POST['min_cred'],
	"maximo_semestres"=>$_POST['max_sem'],
	"minimo_materias"=>$_POST['min_mat'],
	"maximo_materias"=>$_POST['max_mat'],
	"estatus"=>"1"
];
$result=insertPlan($params);
echo $result;
