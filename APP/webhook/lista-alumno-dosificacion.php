<?php 
include_once "../control/controlAlumno.php";
$idUsuario=$_POST['idUsuario'];
$idPlan=$_POST['idPlan'];
$result=consultaAlumnoPlan($idUsuario,$idPlan);
echo $result;