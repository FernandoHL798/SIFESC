<?php 
include_once"../control/controlMovimiento.php";
$params=[
	"id_inscripcion_fk"=>$_POST['idInscripcion'],
	"id_asignacion_fk"=>$_POST['grupo'],
	"semestre"=>$_POST['semestreMov']
];
$result=insertMovimiento($params);
echo $result;