<?php 
include_once"../control/controlPlantel.php";
$params=[
	"id_plantel"=>"1",
	"nombre"=>"cuautitlan"
];
$result=updatePlantel($params);
echo $result;