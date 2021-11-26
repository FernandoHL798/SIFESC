<?php 
include_once"../control/controlArea.php";
$params=[
	"id_area"=>"1",
	"nombre"=>"ciencias"
];
$result=updateArea($params);
echo $result;