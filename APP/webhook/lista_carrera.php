<?php 
include_once"../control/controlCarrera.php";
$idPlan=$_POST['idPlan'];
$result=consultaCarrera($idPlan);
echo $result;