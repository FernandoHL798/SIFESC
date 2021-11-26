<?php 
include_once"../control/controlGrupos.php";
$params=[
	"id_grupo"=>"1",
	"id_asignatura_fk"=>"1",
	"nombre"=>"grupo1"
];
$result=updateGrupos($params);
echo $result;