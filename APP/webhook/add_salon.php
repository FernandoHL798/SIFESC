<?php 
include_once"../control/controlSalon.php";
$params=[
	"id_salon"=>"1",
	"id_edificio_fk"=>"1",
	"clave"=>"2"
];
$result=insertSalon($params);
echo $result;