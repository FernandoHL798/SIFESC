<?php 
include_once"../control/controlCarrera.php";
$params=[
	"id_carrera"=>"1",
	"clave"=>"1",
	"nombre"=>"2"
];
var_dump(updateCarrera($params));