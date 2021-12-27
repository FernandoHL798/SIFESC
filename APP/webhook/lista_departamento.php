<?php 
include_once"../control/controlDepartamento.php";
$idPlantel=$_POST['id_plantel'];
$result=consultaDepartamento($idPlantel);
echo $result;