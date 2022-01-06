<?php 
include_once"../control/controlAsignacion.php";
$params=[
	"id_asignacion"=>"",
	"id_usuarioprofesor_fk"=>"1",
	"id_grupo_fk"=>"1",
	"id_periodo_fk"=>"1",
	"cupo"=>"25"
];
$result=insertAsignacion($params);
echo $result;