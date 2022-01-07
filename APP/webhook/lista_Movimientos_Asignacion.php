<?php
$idAsignacion=$_POST['idAsignacion'];
$idPlan=$_POST['idPlan'];
include_once "../control/controlMovimiento.php";

$result= consultaMovimientosAsignacion($idAsignacion,$idPlan);
echo $result;