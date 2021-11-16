<?php 
include_once"../control/controlProfesor.php";
$params=[
	"id_usuarioprofesor_fk"=>"1",
	"estatus"=>"1"
];
var_dump(updateEstatusProfesor($params));