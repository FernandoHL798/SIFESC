<?php 
include_once"../control/controlPlanEstudios.php";
$idPlan=$_POST['id_plan'];
$result=consultaDatosPlan($idPlan);
echo $result;