<?php 
include_once"../control/controlEstudia.php";
$params=[
	"id_usuarioalumno_fk"=>"1",
	"id_plan_fk"=>"1",
	"anio"=>"2000",
	"turno"=>"1",
	"baja"=>"1",
	"estatus"=>"2"
];
$result=insertEstudia($params);
echo $result;