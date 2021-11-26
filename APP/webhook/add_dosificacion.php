<?php 
include_once"../control/controlDosificacion.php";
$params=[
	"id_usuarioalumno_fk"=>"1",
	"id_periodo_fk"=>"1",
	"fecha_inscripcion"=>"2000-12-10",
	"hora_inscripcion"=>"09:10",
	"fecha_altabaja"=>"2000-12-20"
];
$result=insertDosificacion($params);
echo $result;