<?php 
include_once"../control/controlGrupos.php";
//$id_plan_fk = "9";
//$id_asignatura_fk = "1";
//$nombre_grupo = "1103";
$id_plan_fk = $_POST['idAsignatura'];
$id_asignatura_fk = $_POST['id_asig_fk'];
$nombre_grupo = $_POST['nombre_grupo'];
$result=consultaExisteGrupo($id_plan_fk,$id_asignatura_fk,$nombre_grupo);
echo $result;