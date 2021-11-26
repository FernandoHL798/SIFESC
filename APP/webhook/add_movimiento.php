<?php 
include_once"../control/controlMovimiento.php";
$params=[
	"id_inscripcion_fk"=>"1",
	"id_asignacion_fk"=>"1",
	"estatus"=>"1",
	"calificacion"=>"9",
	"aprobado"=>"1",
	"veces_cursado"=>"1"
];
$result=insertMovimiento($params);
echo $result;