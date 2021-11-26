<?php 
include_once "../control/controlProfesor.php";
$params=[
	"id_usuarioprofesor_fk"=>"1",
	"id_departamento_fk"=>"1"
];
$result=insertProfesor($params);
echo $result;