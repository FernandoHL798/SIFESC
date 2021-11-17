<?php 
include_once"../control/controlEdificio.php";
$params=[
	"id_edificio"=>"1",
	"clave"=>"2",
	"pisos"=>"2"
];
var_dump(updateEdificio($params));