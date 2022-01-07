<?php 
include_once"../control/controlAsignacion.php";
$params=[
	"id_asignacion"=>"",
	"id_usuarioprofesor_fk"=> $_POST['idProfesor'],
	"id_grupo_fk"=>$_POST['grupo_asignacion'],
	"id_periodo_fk"=>"9",
	"cupo"=>$_POST['cupo_asignacion']
];

$result=insertAsignacion($params);
echo $result;

// var_dump($params);