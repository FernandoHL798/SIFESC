<?php 
include_once"../control/controlGrupos.php";
//$id_plan_fk = "1119";
//$codigo = "100";
//$nombre_grupo = "1103";
$id_plan_fk = $_POST['idAsignatura'];
$codigo = $_POST['codigo'];
$nombre_grupo = $_POST['nombre_grupo'];
$result=consultaExisteGrupo($id_plan_fk,$codigo,$nombre_grupo);
echo $result;