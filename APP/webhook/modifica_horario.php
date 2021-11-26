<?php 
include_once"../control/controlHorario.php";
$params=[
	"id_horario"=>"1",
	"id_grupo_fk"=>"1",
	"id_salon_fk"=>"1",
	"inicio"=>"01:00",
	"fin"=>"03:00",
	"duracion"=>"2",
	"dia"=>"2000-12-20"
];
$result=updateHorario($params);
echo $result;