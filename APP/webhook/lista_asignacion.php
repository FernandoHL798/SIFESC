<?php
include_once "../control/controlAsignacion.php";
$id_plan = $_POST['idPlan'];
$idAsignatura= $_POST['idAsignatura'];
$Periodo= $_POST['periodo'];
$result=consultaAsignacion($id_plan,$idAsignatura,$Periodo);
echo $result;