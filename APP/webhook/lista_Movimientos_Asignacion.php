<?php
$idAsignacion=$_POST['idAsignacion'];
include_once "../control/controlMovimiento.php";

$result= consultaMovimientosAsignacion($idAsignacion);
echo $result;