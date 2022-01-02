<?php 
include_once"../control/controlGrupos.php";
$id_plan_fk= "9";
$codigo= "100";
//$id_plan_fk= $_POST['idAsignatura'];
//$codigo= $_POST['codigo'];
$result=queryconsultaGruposAsignaturas($id_plan_fk,$codigo);
echo $result;