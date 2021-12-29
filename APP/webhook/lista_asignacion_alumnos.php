<?php
include_once "../control/controlAsignacion.php";
$params=[
	"id_plan" => $_POST['idPlan'],
	"idAsignatura" => $_POST['idAsignatura'],
	"Periodo" => $_POST['periodo'],
	"idGrupo" => $_POST['idGrupo']
];
$result=consultaAlumnoAsignacion($params);
echo $result;