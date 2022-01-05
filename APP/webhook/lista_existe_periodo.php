<?php 
include_once"../control/controlPeriodo.php";
$idPeriodo=$_POST['id_periodo'];
$Periodo=$_POST['periodoAg'];
$result=consultaExistePeriodo($idPeriodo, $Periodo);
echo $result;