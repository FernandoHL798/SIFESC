<?php
include_once "../control/controlPlanEstudios.php";
$idPlan=$_POST['id_plan'];
$codigo=$_POST['clave_asignatura'];
//$idPlan="9";
//$codigo="100";
$result= consultaExisteAsignaturasPlan($idPlan,$codigo);
echo $result;