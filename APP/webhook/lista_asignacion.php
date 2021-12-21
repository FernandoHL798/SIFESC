<?php
include_once "../control/controlAsignacion.php";
$id_plan = $_POST['idPlan'];
$idAsignatura= $_POST['idAsignatura'];
$result=consultaAsignacion($id_plan,$idAsignatura);
echo $result;
