<?php 
include_once"../control/controlPlanEstudios.php";

$id_plan="2";
$result=deletePlan($id_plan);
echo $result;