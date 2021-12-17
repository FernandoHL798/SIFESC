<?php 
include_once"../control/controlAsignaturas.php";
$params=[
	"idasignatura"=>"1",
	"idPlan"=>"1",
	"codigo"=>"5568",
	"nombre"=>"Matematicas V",
	"creditos"=>"12",
	"antecesor"=>"Matematicas III",
	"sucesor"=>"Matematicas VI",
	"caracter"=>"ob",
	"semestre"=>"5",
	"estatus"=>""
];
$result=insertAsignatura($params);
echo $result;