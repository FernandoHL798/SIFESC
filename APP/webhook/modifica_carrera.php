<?php 
include_once"../control/controlCarrera.php";
$params=[
	"id_carrera"=>"1",
	"id_area_fk"=>"1",
	"clave"=>"1",
	"nombre"=>"2"
];
$result=updateCarrera($params);
echo $result;