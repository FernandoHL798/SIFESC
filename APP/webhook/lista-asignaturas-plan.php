<?php
include_once "../control/controlPlanEstudios.php";

$idPlan=$_POST['id_plan'];
echo consultaAsignaturasPlan($idPlan);