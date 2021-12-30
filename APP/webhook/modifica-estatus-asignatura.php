<?php 
include_once"../control/controlAsignaturas.php";
	$idPlan= $_POST['idPlan'];
	$codigo= $_POST['clave_asignatura'];
	$estatus= $_POST['estatus'];
$result=updateestatusasignaturaplan($params);
echo $result;