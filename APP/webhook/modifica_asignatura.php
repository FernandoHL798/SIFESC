<?php 
include_once"../control/controlAsignaturas.php";
$params[
	"idasignatura"=>"1",
	//"idPlan"=>"023",
	"codigo"=>"7856",
	"nombre"=>"Matematicas V",
	"creditos"=>"12",
	"antecesor"=>"Matematicas III",
	"sucesor"=>"Matematicas VI",
	"caracter"=>"ob",
	"semestre"="5"
];
var_dump(updateAsignaturas($params));