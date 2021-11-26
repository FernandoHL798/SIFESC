<?php 
include_once"../control/controlEdificio.php";
$params=[
	"id_edificio"=>"1",
	"id_plantel_fk"=>"1",
	"clave"=>"2",
	"pisos"=>"2"
];
$result=insertEdificio($params);
echo $result;