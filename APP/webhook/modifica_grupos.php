<?php 
include_once"../control/controlGrupos.php";
$params=[
	"id_grupo"=>$_POST['id_grupo'],
	"id_asignatura_fk"=>$_POST['id_asignatura_fk'],
	"nombre"=>$_POST['nombre'],
	"tipo"=>$_POST['tipo'],
	"turno"=>$_POST['turno'],
	"estatus"=>$_POST['estatus']
];
$result=updateGrupos($params);
echo $result;