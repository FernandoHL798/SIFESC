<?php 
include_once"../control/controlGrupos.php";
$params=[
	"id_grupo"=>"1",
	"id_asignatura_fk"=>"1",
	"nombre"=>"grupo1",
	"tipo"=>"",
	"estatus"=>""
];
$result=insertGrupos($params);
echo $result;