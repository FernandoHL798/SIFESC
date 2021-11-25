<?php
include_once "../control/controlAsignacion.php";
$id_plan = $_POST['idPlan'];
echo consultaAsignacion($id_plan);