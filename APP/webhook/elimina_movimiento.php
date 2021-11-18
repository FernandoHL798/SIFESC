<?php 
include_once"../control/controlMovimiento.php";
$params=[
	"id_inscripcion_fk"=>"1",
	"id_asignacion_fk"=>"1"
];
var_dump(deleteMovimiento($params));