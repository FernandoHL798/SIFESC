<?php 
include_once"../control/controlPlantel.php";
$params=[
	"id_plantel"=>"1",
	"id_facultad_fk"=>"1",
	"nombre"=>"cuautitlan"
];
var_dump(insertPlantel($params));