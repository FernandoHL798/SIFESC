<?php 
include_once"../control/controlAsignaturas.php";
$id_plan=$_POST['idPlan'];
$result=consultaAsignaturas($id_plan);
echo $result;