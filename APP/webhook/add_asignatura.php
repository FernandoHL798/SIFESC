<?php 
include_once"../control/controlAsignaturas.php";
$params=[
	"idasignatura"=>$_POST['clave_asignatura'],
	"idPlan"=>$_POST['idPlan'],
	"codigo"=> $_POST['clave_asignatura'],
	"nombre"=>$_POST['nom_asignatura'],
	"creditos"=>$_POST['creditos'],
	"antecesor"=>"1", //chequeo con Naye sobre front
	"sucesor"=>"2", //chequeo con Naye sobre front
	"caracter"=>$_POST['caracter'],
	"semestre"=>$_POST['semestre']
];
$result=insertAsignatura($params);
echo $result;

