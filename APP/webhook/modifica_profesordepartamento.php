<?php 
include_once "../control/controlProfesordepartamento.php";
$params=[
	"id_usuarioprofesor_fk"=> "1",
	"estatus"=> "1",
	"id_departamento_fk"=>"1"
];

echo updateProfesordepartamento($params);