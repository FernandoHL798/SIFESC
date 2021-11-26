<?php 
include_once"../control/controlGeneracion.php";
$params=[
	"id_generacion"=>"1",
	"id_plantel_fk"=>"1",
	"anio"=>"2000"
];
$result=insertGeneracion($params);
echo $result;