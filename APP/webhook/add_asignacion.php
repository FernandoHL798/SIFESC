<?php 
include_once"../control/controlAsignacion.php";
$params=[
	"id_asignacion"=>"1",
	"id_usuarioprofesor_fk"=>"1",
	"id_grupo_fk"=>"1",
	"cupo"=>"25"
];
var_dump(insertAsignacion($params));