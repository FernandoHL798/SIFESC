<?php 
include_once"../control/controlDepartamento.php";
$params=[
	"id_departamento"=>"1",
	"nombre"=>"Matematicas",
	"id_area_fk"=>"1"
];
var_dump(insertDepartamento($params));