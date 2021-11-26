<?php
include_once "../control/controlAsignacion.php";
$id_plan = $_POST['idPlan'];
$result=consultaAsignacion($id_plan);
echo $result;