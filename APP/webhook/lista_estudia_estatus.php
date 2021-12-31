<?php 
include_once"../control/controlEstudia.php";
$idAlumno=$_POST['idUsuario'];
$idPlan=$_POST['idPlan'];
$result=consultaEstatusEstudia($idAlumno,$idPlan);
echo $result;