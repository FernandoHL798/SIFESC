<?php 
include_once"../control/controlProfesordepartamento.php";
$params=[
	"id_usuarioprofesor_fk"=>"1",
	"id_departamento_fk"=>"1"
];
$result=deleteProfesordepartamento($params);
echo $result;