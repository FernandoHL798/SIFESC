<?php 
include_once"../control/controlEdificio.php";
$params=[
	"id_edificio"=>"1",
	"clave"=>"2",
	"pisos"=>"2"
];
$result=updateEdificio($params);
echo $result;