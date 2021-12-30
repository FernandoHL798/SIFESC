<?php 
include_once"../control/controlAsignacion.php";
$params=[
	"id_asignacion"=>$_POST['idAsignacion'],
	"inscritos"=>$_POST['inscritos']
];
$result=updateInscritosAsignacion($params);
echo $result;