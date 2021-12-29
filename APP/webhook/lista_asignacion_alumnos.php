<?php
include_once "../control/controlAsignacion.php";
$params=[
	"id_plan" => $_POST['idPlan'],
	"idAsignatura" => $_POST['idAsignatura'],
	"Periodo" => $_POST['periodo'],
	"idAsignacion" => $_POST['idAsignacion']
];
$result=consultaAlumnoAsignacion($params);
echo $result;