<?php 
include_once"../control/controlGrupos.php";
$idAsignatura=$_POST['idAsignatura'];
$result=consultaGrupos($idAsignatura);
echo $result;