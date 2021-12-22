<?php 
include_once"../control/controlAsignaturas.php";
$params=[
	"idasignatura"=> $_POST['idAsignatura'],
	"codigo"=> $_POST['codigo'],
	"nombre"=> $_POST['nombre'],
	"creditos"=> $_POST['creditos'],
	"antecesor"=>"1",//preguntar a Nay
	"sucesor"=>"2",//Preguntare a Nay
	"caracter"=> $_POST['caracter'],
	"semestre"=> $_POST['semestre'],
	//"estatus"=>$_POST['estatus']//Preguntar a Nay
];
$estatus = $_POST['estatus'];
$result=updateAsignaturas($params, $estatus);
echo $result;
//echo $_POST['estatus'];