<?php 
include_once"../control/controlInscripcion.php";
$params=[
	"id_inscripcion"=>"1",
	"id_usuarioalumno_fk"=>"1",
	"id_periodo_fk"=>"1",
	"fecha_inscripcion"=>"2000-12-10",
	"hora_inscripcion"=>"09:10",
	"fecha_altabaja"=>"2000-12-20",
	"hora_altabaja"=>"09:10",
	"estatus"=>""
];
$result=updateInscripcion($params);
echo $result;