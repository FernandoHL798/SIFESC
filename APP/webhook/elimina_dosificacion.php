<?php 
include_once"../control/controlDosificacion.php";
$params=[
	"id_usuarioalumno_fk"=>"1",
	"id_periodo_fk"=>"1"
];
$result=deleteDosificacion($params);
echo $result;