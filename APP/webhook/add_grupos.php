<?php 
include_once"../control/controlGrupos.php";
$params=[
	"id_asignatura_fk"=>$_POST['codigo'],
	"nombre"=>$_POST['nombre_grupo'],
	"tipo"=>$_POST['tipo'],
	"turno"=>$_POST['turno_add'],
	"estatus"=>"1"
	//"id_grupo"=>"",
	//"id_asignatura_fk"=>"100",
	//"nombre"=>"3000",
	//"tipo"=>"1",
	//"turno"=>"1",
	//"estatus"=>"1"
];
$result=insertGrupos($params);
echo $result;

