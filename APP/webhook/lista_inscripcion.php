<?php 
include_once"../control/controlInscripcion.php";
$idPlan=$_POST['idPlan'];
$idUsuario=$_POST['idUsuario'];
$result=consultaInscripcion($idPlan,$idUsuario);
echo $result;