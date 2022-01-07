<?php 
include_once "../control/controlAlumno.php";
$idUsuario=$_POST['idUsuario'];
$idPlan=$_POST['idPlan'];
$idCarrera= $_POST['idCarrera'];
$result=consultaAlumnoPlan($idUsuario,$idPlan,$idCarrera);
echo $result;