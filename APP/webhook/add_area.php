<?php 
include_once"../control/controlArea.php";
$params=[
	"id_area"=>"1",
	"nombre"=>"ciencias"
];
$result=insertArea($params);
echo $result;