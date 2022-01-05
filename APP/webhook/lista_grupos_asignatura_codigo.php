<?php 
include_once"../control/controlGrupos.php";
//$id_plan_fk= "9";
//$id_asignatura_fk= "1";
$id_plan_fk = $_POST['idAsignatura'];
$id_asignatura_fk = $_POST['codigo'];
$result=queryconsultaGruposAsignaturas($id_plan_fk,$id_asignatura_fk);
echo $result;