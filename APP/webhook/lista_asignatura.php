<?php 
include_once"../control/controlAsignaturas.php";
$id_plan=$_POST['idPlan'];
$periodo=$_POST['periodo'];
$result=consultaAsignaturas($id_plan,$periodo);
echo $result;